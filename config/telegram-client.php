<?php

declare(strict_types=1);

use MeRezaRezaei\TelegramClient\Bus\StreamSchema;
use MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator;

/*
 * telegram-client configuration.
 *
 * Keys:
 * - schema_sources (string|null): directory holding the .tl layer sources
 *   the mirror regenerates from. Defaults to this package's committed
 *   copies of the owner's full v227 mirror (schema/sources/
 *   TL_telegram_v227.tl + TL_mtproto_v1.tl + TL_secret.tl, MIT);
 *   teleproto's vendored (partial) schema/sources/ stays a documented
 *   fallback. Set this only to pin a different checkout.
 * - ship_namespaces (list<string>): curated migration dial (plan Task 4) —
 *   TL namespaces whose per-type migrations are copied into migrations/
 *   at the package root by `php bin/regenerate --ship` (the provider
 *   publishes them via loadMigrationsFrom). The full layer mirror always
 *   stays in generated/. Comma-separated env override, e.g.
 *   TELEGRAM_CLIENT_SHIP_NAMESPACES="auth,messages,users".
 *
 * Bus section (Phase 3):
 * - bus.stream / bus.group / bus.reload_channel: canonical Redis bus names,
 *   sourced from StreamSchema consts so config and wire can never drift.
 * - bus.connection: the illuminate/redis connection name the bus reads and
 *   writes through (RedisManager key of the host app).
 * - bus.redis_client: preferred illuminate/redis driver, 'predis' (default,
 *   pure PHP) or 'phpredis' (extension). Host apps override by configuring
 *   their own redis service; this documents the package default.
 */
$shipEnv = env('TELEGRAM_CLIENT_SHIP_NAMESPACES');

return [
    'schema_sources' => env('TELEGRAM_CLIENT_SCHEMA_SOURCES'),

    'ship_namespaces' => $shipEnv === null
        ? SchemaRegenerator::DEFAULT_SHIP_NAMESPACES
        : array_values(array_filter(array_map('trim', explode(',', $shipEnv)))),

    'bus' => [
        'stream' => StreamSchema::STREAM,
        'group' => StreamSchema::GROUP,
        'reload_channel' => StreamSchema::RELOAD_CHANNEL,
        'connection' => 'default',
        'redis_client' => env('TELEGRAM_CLIENT_REDIS', 'predis'),
    ],
];
