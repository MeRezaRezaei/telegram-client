<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPasskeyResponseRegister of InputPasskeyResponse.
 *
 * bytes params carried as base64 strings: attestation_data
 */
final class InputPasskeyResponseRegisterData extends TlInputPasskeyResponseAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $clientData,
    public string $attestationData,
    ) {
    }
}
