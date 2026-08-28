<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputMessage.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputMessageAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputMessageCallbackQuery' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessageCallbackQueryData::class,
        'inputMessageID' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessageIDData::class,
        'inputMessagePinned' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessagePinnedData::class,
        'inputMessageReplyTo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputMessageReplyToData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputMessage');
        /** @var static */
        return $class::from($payload);
    }
}
