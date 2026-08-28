<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method auth.bindTempAuthKey (crc32 cdd42a05), returns Bool. */
final class TlAuthBindTempAuthKeyData extends Data
{
    public const METHOD = 'auth.bindTempAuthKey';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public int $permAuthKeyId,
    public int $nonce,
    public int $expiresAt,
    public string $encryptedMessage,
    ) {
    }
}
