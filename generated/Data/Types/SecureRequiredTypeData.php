<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for secureRequiredType of SecureRequiredType.
 */
final class SecureRequiredTypeData extends TlSecureRequiredTypeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $nativeNames,
    public bool $selfieRequired,
    public bool $translationRequired,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureValueTypeAbstractData $type,
    ) {
    }
}
