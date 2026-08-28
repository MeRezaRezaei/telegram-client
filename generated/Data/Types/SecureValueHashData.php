<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for secureValueHash of SecureValueHash.
 *
 * bytes params carried as base64 strings: hash
 */
final class SecureValueHashData extends TlSecureValueHashAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureValueTypeAbstractData $type,
    public string $hash,
    ) {
    }
}
