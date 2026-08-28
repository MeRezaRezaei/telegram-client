<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPhoto of InputPhoto.
 *
 * bytes params carried as base64 strings: file_reference
 */
final class InputPhotoData extends TlInputPhotoAbstractData
{
    public function __construct(
    public int $id,
    public int $accessHash,
    public string $fileReference,
    ) {
    }
}
