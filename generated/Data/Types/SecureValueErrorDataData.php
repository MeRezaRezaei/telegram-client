<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for secureValueErrorData of SecureValueError.
 *
 * bytes params carried as base64 strings: data_hash
 */
final class SecureValueErrorDataData extends TlSecureValueErrorAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureValueTypeAbstractData $type,
    public string $dataHash,
    public string $field,
    public string $text,
    ) {
    }
}
