<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method account.reorderUsernames (crc32 ef500eab), returns Bool. */
final class TlAccountReorderUsernamesData extends Data
{
    public const METHOD = 'account.reorderUsernames';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public array $order,
    ) {
    }
}
