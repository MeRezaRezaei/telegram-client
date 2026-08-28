<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type storage.FileType.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlStorageFileTypeAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'storage.fileGif' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileGifData::class,
        'storage.fileJpeg' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileJpegData::class,
        'storage.fileMov' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileMovData::class,
        'storage.fileMp3' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileMp3Data::class,
        'storage.fileMp4' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileMp4Data::class,
        'storage.filePartial' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFilePartialData::class,
        'storage.filePdf' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFilePdfData::class,
        'storage.filePng' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFilePngData::class,
        'storage.fileUnknown' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileUnknownData::class,
        'storage.fileWebp' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileWebpData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for storage.FileType');
        /** @var static */
        return $class::from($payload);
    }
}
