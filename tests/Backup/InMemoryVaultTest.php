<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Tests\Backup;

use MeRezaRezaei\TelegramClient\Backup\InMemoryVault;
use PHPUnit\Framework\TestCase;
use RuntimeException;

/**
 * Plan P4 Task 2: InMemoryVault semantics — assoc chunk store (latest
 * wins per hash), manifest stack (latest wins), null before the first
 * manifest, loud failure on a missing chunk.
 */
final class InMemoryVaultTest extends TestCase
{
    public function test_chunk_roundtrip_returns_distinct_msg_ids(): void
    {
        $vault = new InMemoryVault();

        $first = $vault->putChunk('hash-a', 'bytes-a');
        $second = $vault->putChunk('hash-b', 'bytes-b');

        self::assertSame('bytes-a', $vault->getChunk('hash-a'));
        self::assertSame('bytes-b', $vault->getChunk('hash-b'));
        self::assertNotSame($first, $second);
        self::assertNotSame('', $first);
    }

    public function test_chunk_reupload_same_hash_latest_wins(): void
    {
        $vault = new InMemoryVault();

        $vault->putChunk('hash-a', 'old-bytes');
        $vault->putChunk('hash-a', 'new-bytes');

        self::assertSame('new-bytes', $vault->getChunk('hash-a'));
    }

    public function test_manifest_latest_wins(): void
    {
        $vault = new InMemoryVault();

        $vault->putManifest('{"version":1}');
        $vault->putManifest('{"version":2}');

        self::assertSame(['version' => 2], $vault->getLatestManifest());
    }

    public function test_latest_manifest_null_before_any_put(): void
    {
        $vault = new InMemoryVault();

        self::assertNull($vault->getLatestManifest());
    }

    public function test_missing_chunk_throws(): void
    {
        $vault = new InMemoryVault();

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('hash-missing');

        $vault->getChunk('hash-missing');
    }
}
