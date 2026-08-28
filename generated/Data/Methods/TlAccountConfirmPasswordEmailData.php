<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.confirmPasswordEmail (crc32 8fdf1920), returns Bool. */
final class TlAccountConfirmPasswordEmailData extends Data
{
    public const METHOD = 'account.confirmPasswordEmail';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public string $code,
    ) {
    }
}
