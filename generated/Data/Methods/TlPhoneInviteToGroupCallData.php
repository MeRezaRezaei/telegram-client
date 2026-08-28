<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method phone.inviteToGroupCall (crc32 7b393160), returns Updates. */
final class TlPhoneInviteToGroupCallData extends Data
{
    public const METHOD = 'phone.inviteToGroupCall';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $call,
    public array $users,
    ) {
    }
}
