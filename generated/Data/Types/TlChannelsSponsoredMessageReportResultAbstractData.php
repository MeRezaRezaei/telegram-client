<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type channels.SponsoredMessageReportResult.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlChannelsSponsoredMessageReportResultAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'channels.sponsoredMessageReportResultAdsHidden' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelsSponsoredMessageReportResultAdsHiddenData::class,
        'channels.sponsoredMessageReportResultChooseOption' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelsSponsoredMessageReportResultChooseOptionData::class,
        'channels.sponsoredMessageReportResultReported' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelsSponsoredMessageReportResultReportedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for channels.SponsoredMessageReportResult');
        /** @var static */
        return $class::from($payload);
    }
}
