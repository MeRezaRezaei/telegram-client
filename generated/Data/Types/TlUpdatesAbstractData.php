<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type Updates.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlUpdatesAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'updateShort' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UpdateShortData::class,
        'updateShortChatMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UpdateShortChatMessageData::class,
        'updateShortMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UpdateShortMessageData::class,
        'updateShortSentMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UpdateShortSentMessageData::class,
        'updates' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UpdatesData::class,
        'updatesCombined' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UpdatesCombinedData::class,
        'updatesTooLong' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\UpdatesTooLongData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for Updates');
        /** @var static */
        return $class::from($payload);
    }
}
