<?php

declare(strict_types=1);

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
return [
    'schema_sources' => env('TELEGRAM_CLIENT_SCHEMA_SOURCES'),
];
