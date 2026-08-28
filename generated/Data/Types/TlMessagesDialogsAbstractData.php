<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type messages.Dialogs.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessagesDialogsAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messages.dialogs' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesDialogsData::class,
        'messages.dialogsNotModified' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesDialogsNotModifiedData::class,
        'messages.dialogsSlice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessagesDialogsSliceData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for messages.Dialogs');
        /** @var static */
        return $class::from($payload);
    }
}
