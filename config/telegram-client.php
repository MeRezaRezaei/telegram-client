<?php

declare(strict_types=1);

/*
 * telegram-client configuration.
 *
 * schema_sources: directory holding teleproto's committed layer .tl sources
 * (api.tl + mtproto.tl). Defaults to null so the loader resolves the vendored
 * teleproto path itself; set this only to pin a different checkout.
 */
return [
    'schema_sources' => env('TELEGRAM_CLIENT_SCHEMA_SOURCES'),
];
