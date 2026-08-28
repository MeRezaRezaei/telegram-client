<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputEncryptedFileUploaded of InputEncryptedFile.
 */
final class InputEncryptedFileUploadedData extends TlInputEncryptedFileAbstractData
{
    public function __construct(
    public int $id,
    public int $parts,
    public string $md5Checksum,
    public int $keyFingerprint,
    ) {
    }
}
