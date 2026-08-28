<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputChatTheme.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputChatThemeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputChatTheme' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputChatThemeData::class,
        'inputChatThemeEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputChatThemeEmptyData::class,
        'inputChatThemeUniqueGift' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputChatThemeUniqueGiftData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputChatTheme');
        /** @var static */
        return $class::from($payload);
    }
}
