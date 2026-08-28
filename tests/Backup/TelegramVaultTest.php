<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Tests\Backup;

use MeRezaRezaei\TelegramClient\Backup\TelegramVault;
use MeRezaRezaei\TelegramClient\Tests\Support\FakeUserScope;
use MeRezaRezaei\TelegramClient\Tests\Support\FakeVaultApi;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * Plan P4 Task 2: TelegramVault offline against the fake api call map —
 * lazy channel resolution (find-else-create, cached), chunk roundtrip via
 * upload+sendDocument with name/caption = hash, manifest posts as
 * 'TBMANIFEST1:'-prefixed text and latest wins, and prefix detection via
 * string functions only (the fake's findMessagesByName matches loosely,
 * so only vault-side str_starts_with/=== can reject decoys).
 */
final class TelegramVaultTest extends TestCase
{
    /** @return array{call: string, args: list<mixed>} the last recorded $name call */
    private function callOf(FakeVaultApi $api, string $name): ?array
    {
        $match = null;
        foreach ($api->calls as $call) {
            if ($call['call'] === $name) {
                $match = $call;
            }
        }

        return $match;
    }

    public function test_channel_created_when_missing_then_cached(): void
    {
        $api = new FakeVaultApi();
        $vault = new TelegramVault('set1', $api->map());

        $msgId = $vault->putManifest('{"version":1}');

        self::assertSame('1', $msgId);
        self::assertSame(1, $api->createChannelCalls(), 'missing channel must be created exactly once');
        $find = $this->callOf($api, 'findChannel');
        self::assertNotNull($find);
        self::assertSame('teleproto-backup:set1', $find['args'][0], 'lookup uses the channel title');

        $vault->putManifest('{"version":2}');
        self::assertSame(1, $api->createChannelCalls(), 'resolution is lazy and the id is cached');
    }

    public function test_existing_channel_found_without_create(): void
    {
        $api = new FakeVaultApi();
        $api->addChannel('teleproto-backup:set1');
        $vault = new TelegramVault('set1', $api->map());

        $vault->putChunk('hash-a', 'bytes-a');

        self::assertSame(0, $api->createChannelCalls(), 'existing channel must not be recreated');
        $send = $this->callOf($api, 'sendDocument');
        self::assertNotNull($send);
        self::assertSame(
            ['_' => 'inputPeerChannel', 'channel_id' => 1000, 'access_hash' => 4242],
            $send['args'][0],
            'calls address the found channel as an inputPeerChannel with its access hash',
        );
    }

    public function test_chunk_roundtrip_uploads_named_by_hash(): void
    {
        $api = new FakeVaultApi();
        $vault = new TelegramVault('set1', $api->map());

        $msgId = $vault->putChunk('hash-a', 'bytes-a');

        self::assertSame('1', $msgId);
        $upload = $this->callOf($api, 'uploadBytes');
        self::assertNotNull($upload);
        self::assertSame(['hash-a', 'bytes-a'], $upload['args'], 'chunk uploads under its hash as file name');
        $send = $this->callOf($api, 'sendDocument');
        self::assertNotNull($send);
        self::assertSame('hash-a', $send['args'][2], 'caption is the hash');
        self::assertSame('hash-a', $send['args'][1]['name'], 'document file name is the hash');
        self::assertSame('bytes-a', $vault->getChunk('hash-a'));
    }

    public function test_get_chunk_rejects_longer_names_sharing_the_hash_prefix(): void
    {
        $api = new FakeVaultApi();
        $channelId = $api->addChannel('teleproto-backup:set1');
        $api->postDocument($channelId, 'hash-a-v2', 'other bytes');

        $vault = new TelegramVault('set1', $api->map());

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('hash-a');

        $vault->getChunk('hash-a');
    }

    public function test_manifest_latest_wins(): void
    {
        $api = new FakeVaultApi();
        $vault = new TelegramVault('set1', $api->map());

        $vault->putManifest('{"version":1}');
        $vault->putManifest('{"version":2}');

        self::assertSame(['version' => 2], $vault->getLatestManifest());
        $send = $this->callOf($api, 'sendText');
        self::assertNotNull($send);
        self::assertSame('TBMANIFEST1:' . base64_encode('{"version":2}'), $send['args'][1], 'manifest text is marker + base64 json');
    }

    public function test_manifest_prefix_detection_uses_string_functions_not_regex(): void
    {
        $api = new FakeVaultApi();
        $channelId = $api->addChannel('teleproto-backup:set1');

        // Decoy: marker NOT at position 0 but carrying a HIGHER (later) id.
        $api->postText($channelId, 'noteTBMANIFEST1:' . base64_encode('{"version":9}'));
        $api->postText($channelId, 'TBMANIFEST1:' . base64_encode('{"version":2}'));

        $vault = new TelegramVault('set1', $api->map());

        self::assertSame(
            ['version' => 2],
            $vault->getLatestManifest(),
            'contains-but-not-startswith decoys are ignored even when newer'
        );
    }

    public function test_latest_manifest_null_when_channel_has_no_manifests(): void
    {
        $api = new FakeVaultApi();
        $channelId = $api->addChannel('teleproto-backup:set1');
        $api->postDocument($channelId, 'hash-a', 'bytes-a');

        $vault = new TelegramVault('set1', $api->map());

        self::assertNull($vault->getLatestManifest());
    }

    public function test_corrupt_manifest_payload_fails_loud(): void
    {
        $api = new FakeVaultApi();
        $channelId = $api->addChannel('teleproto-backup:set1');
        $api->postText($channelId, 'TBMANIFEST1:not-base64-json!!');

        $vault = new TelegramVault('set1', $api->map());

        $this->expectException(RuntimeException::class);
        $vault->getLatestManifest();
    }

    public function test_scope_api_map_exposes_the_six_callables(): void
    {
        $map = TelegramVault::scopeApi(new FakeUserScope());
        ksort($map);

        self::assertSame(
            ['createChannel', 'findChannel', 'findMessagesByName', 'sendDocument', 'sendText', 'uploadBytes'],
            array_keys($map)
        );
        foreach ($map as $callable) {
            self::assertIsCallable($callable);
        }
    }

    public function test_constructor_rejects_incomplete_api_map(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('findChannel');

        new TelegramVault('set1', ['uploadBytes' => static fn () => []]);
    }
}
