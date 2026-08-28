<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type BadMsgNotification.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlBadMsgNotificationAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'bad_msg_notification' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BadMsgNotificationData::class,
        'bad_server_salt' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BadServerSaltData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for BadMsgNotification');
        /** @var static */
        return $class::from($payload);
    }
}
