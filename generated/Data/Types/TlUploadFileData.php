<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for upload.file of upload.File.
 *
 * bytes params carried as base64 strings: bytes
 */
final class TlUploadFileData extends TlUploadFileAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStorageFileTypeAbstractData $type,
    public int $mtime,
    public string $bytes,
    ) {
    }
}
