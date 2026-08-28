<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPhotoFileLocation of InputFileLocation.
 *
 * bytes params carried as base64 strings: file_reference
 */
final class InputPhotoFileLocationData extends TlInputFileLocationAbstractData
{
    public function __construct(
    public int $id,
    public int $accessHash,
    public string $fileReference,
    public string $thumbSize,
    ) {
    }
}
