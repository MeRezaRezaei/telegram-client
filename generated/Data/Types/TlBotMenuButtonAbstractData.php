<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type BotMenuButton.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlBotMenuButtonAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'botMenuButton' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotMenuButtonData::class,
        'botMenuButtonCommands' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotMenuButtonCommandsData::class,
        'botMenuButtonDefault' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotMenuButtonDefaultData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for BotMenuButton');
        /** @var static */
        return $class::from($payload);
    }
}
