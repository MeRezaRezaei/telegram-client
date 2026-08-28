<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type upload.File.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlUploadFileAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'upload.file' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUploadFileData::class,
        'upload.fileCdnRedirect' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUploadFileCdnRedirectData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for upload.File');
        /** @var static */
        return $class::from($payload);
    }
}
