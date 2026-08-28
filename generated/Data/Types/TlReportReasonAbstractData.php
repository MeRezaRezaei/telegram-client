<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type ReportReason.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlReportReasonAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputReportReasonChildAbuse' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonChildAbuseData::class,
        'inputReportReasonCopyright' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonCopyrightData::class,
        'inputReportReasonFake' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonFakeData::class,
        'inputReportReasonGeoIrrelevant' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonGeoIrrelevantData::class,
        'inputReportReasonIllegalDrugs' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonIllegalDrugsData::class,
        'inputReportReasonOther' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonOtherData::class,
        'inputReportReasonPersonalDetails' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonPersonalDetailsData::class,
        'inputReportReasonPornography' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonPornographyData::class,
        'inputReportReasonSpam' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonSpamData::class,
        'inputReportReasonViolence' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputReportReasonViolenceData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for ReportReason');
        /** @var static */
        return $class::from($payload);
    }
}
