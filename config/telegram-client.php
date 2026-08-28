<?php

declare(strict_types=1);

use MeRezaRezaei\TelegramClient\Schema\Generator\SchemaRegenerator;

/*
 * telegram-client configuration.
 *
 * schema_sources: directory holding the .tl layer sources the mirror
 * regenerates from. Defaults to this package's committed copies of the
 * owner's full v227 mirror (schema/sources/TL_telegram_v227.tl +
 * TL_mtproto_v1.tl + TL_secret.tl, MIT); teleproto's vendored
 * (partial) schema/sources/ stays a documented fallback. Set this only
 * to pin a different checkout.
 */
$shipEnv = env('TELEGRAM_CLIENT_SHIP_NAMESPACES');

return [
    'schema_sources' => env('TELEGRAM_CLIENT_SCHEMA_SOURCES'),

    /*
     * Curated migration dial (plan Task 4): TL namespaces whose per-type
     * migrations are copied into migrations/ at the package root by
     * `php bin/regenerate --ship` (provider publishes them via
     * loadMigrationsFrom). The full layer mirror always stays in
     * generated/. Comma-separated env override, e.g.
     * TELEGRAM_CLIENT_SHIP_NAMESPACES="auth,messages,users".
     */
    'ship_namespaces' => $shipEnv === null
        ? SchemaRegenerator::DEFAULT_SHIP_NAMESPACES
        : array_values(array_filter(array_map('trim', explode(',', $shipEnv)))),
];
