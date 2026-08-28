<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type BotInlineMessage.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlBotInlineMessageAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'botInlineMessageMediaAuto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageMediaAutoData::class,
        'botInlineMessageMediaContact' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageMediaContactData::class,
        'botInlineMessageMediaGeo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageMediaGeoData::class,
        'botInlineMessageMediaInvoice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageMediaInvoiceData::class,
        'botInlineMessageMediaVenue' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageMediaVenueData::class,
        'botInlineMessageMediaWebPage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageMediaWebPageData::class,
        'botInlineMessageRichMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageRichMessageData::class,
        'botInlineMessageText' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\BotInlineMessageTextData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for BotInlineMessage');
        /** @var static */
        return $class::from($payload);
    }
}
