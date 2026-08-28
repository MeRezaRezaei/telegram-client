<?php

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Tests\Ingest;

use MeRezaRezaei\TelegramClient\Ingest\RouteIdempotency;
use MeRezaRezaei\TelegramClient\Ingest\UpdateIngestor;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUserUser;
use MeRezaRezaei\TelegramClient\TelegramClient;

/**
 * Plan Task 5: the public face — TelegramClient resolves from the
 * container as a singleton and delegates to the ingest surfaces.
 */
final class TelegramClientTest extends IngestTestCase
{
    private const ACCOUNT = 7;

    private const USER_ID = 501558149;

    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate', [
            '--force' => true,
            '--realpath' => true,
            '--path' => RouteIdempotency::migrationPaths(),
        ]);
    }

    public function test_resolves_from_the_container_as_a_singleton(): void
    {
        $client = $this->app->make(TelegramClient::class);

        self::assertInstanceOf(TelegramClient::class, $client);
        self::assertSame($client, $this->app->make(TelegramClient::class), 'singleton binding');
        self::assertSame($this->app->make(UpdateIngestor::class), $this->app->make(UpdateIngestor::class), 'ingestor singleton binding');
    }

    public function test_delegates_update_ingest_and_entity_lookup(): void
    {
        $client = $this->app->make(TelegramClient::class);

        $root = $client->ingest([
            '_' => 'user',
            'flags' => (1 << 0) | (1 << 1) | (1 << 2) | (1 << 3),
            'id' => self::USER_ID,
            'access_hash' => -5988024083302710253,
            'first_name' => 'Reza',
            'last_name' => 'Rezaei',
            'username' => 'RezaRezaei',
        ], self::ACCOUNT);

        self::assertInstanceOf(TlUserUser::class, $root);

        $user = $client->user(self::ACCOUNT, self::USER_ID);
        self::assertNotNull($user);
        self::assertSame('Reza', $user->currentInstance->first_name);
    }

    public function test_delegates_response_ingest(): void
    {
        $client = $this->app->make(TelegramClient::class);

        $response = [
            '_' => 'users.users',
            'users' => [
                [
                    '_' => 'user',
                    'flags' => (1 << 0) | (1 << 1) | (1 << 2) | (1 << 3),
                    'id' => self::USER_ID,
                    'access_hash' => -5988024083302710253,
                    'first_name' => 'Reza',
                    'last_name' => 'Rezaei',
                    'username' => 'RezaRezaei',
                ],
            ],
        ];
        $params = ['id' => [['_' => 'inputUserSelf']]];

        $first = $client->ingestResponse('users.getUsers', $params, $response, self::ACCOUNT);
        $second = $client->ingestResponse('users.getUsers', $params, $response, self::ACCOUNT);

        self::assertNotNull($first);
        self::assertNotNull($second);
        self::assertSame((string) $first->id, (string) $second->id);
    }
}
