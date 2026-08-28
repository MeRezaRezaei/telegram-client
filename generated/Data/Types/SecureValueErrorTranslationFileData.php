<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for secureValueErrorTranslationFile of SecureValueError.
 *
 * bytes params carried as base64 strings: file_hash
 */
final class SecureValueErrorTranslationFileData extends TlSecureValueErrorAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureValueTypeAbstractData $type,
    public string $fileHash,
    public string $text,
    ) {
    }
}
