<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type upload.CdnFile.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlUploadCdnFileAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'upload.cdnFile' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUploadCdnFileData::class,
        'upload.cdnFileReuploadNeeded' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUploadCdnFileReuploadNeededData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for upload.CdnFile');
        /** @var static */
        return $class::from($payload);
    }
}
