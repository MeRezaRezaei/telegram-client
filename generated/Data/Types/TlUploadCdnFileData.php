<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for upload.cdnFile of upload.CdnFile.
 *
 * bytes params carried as base64 strings: bytes
 */
final class TlUploadCdnFileData extends TlUploadCdnFileAbstractData
{
    public function __construct(
    public string $bytes,
    ) {
    }
}
