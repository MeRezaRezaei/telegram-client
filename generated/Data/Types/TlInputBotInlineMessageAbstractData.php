<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputBotInlineMessage.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputBotInlineMessageAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputBotInlineMessageGame' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageGameData::class,
        'inputBotInlineMessageMediaAuto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageMediaAutoData::class,
        'inputBotInlineMessageMediaContact' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageMediaContactData::class,
        'inputBotInlineMessageMediaGeo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageMediaGeoData::class,
        'inputBotInlineMessageMediaInvoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageMediaInvoiceData::class,
        'inputBotInlineMessageMediaVenue' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageMediaVenueData::class,
        'inputBotInlineMessageMediaWebPage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageMediaWebPageData::class,
        'inputBotInlineMessageRichMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageRichMessageData::class,
        'inputBotInlineMessageText' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputBotInlineMessageTextData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputBotInlineMessage');
        /** @var static */
        return $class::from($payload);
    }
}
