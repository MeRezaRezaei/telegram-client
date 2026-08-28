<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type ChatParticipant.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlChatParticipantAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'chatParticipant' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChatParticipantData::class,
        'chatParticipantAdmin' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChatParticipantAdminData::class,
        'chatParticipantCreator' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChatParticipantCreatorData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for ChatParticipant');
        /** @var static */
        return $class::from($payload);
    }
}
