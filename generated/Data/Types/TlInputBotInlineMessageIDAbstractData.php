<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputBotInlineMessageID.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputBotInlineMessageIDAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputBotInlineMessageID' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageIDData::class,
        'inputBotInlineMessageID64' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageID64Data::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputBotInlineMessageID');
        /** @var static */
        return $class::from($payload);
    }
}
