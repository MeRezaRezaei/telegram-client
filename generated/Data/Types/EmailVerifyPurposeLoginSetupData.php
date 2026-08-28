<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for emailVerifyPurposeLoginSetup of EmailVerifyPurpose.
 */
final class EmailVerifyPurposeLoginSetupData extends TlEmailVerifyPurposeAbstractData
{
    public function __construct(
    public string $phoneNumber,
    public string $phoneCodeHash,
    ) {
    }
}
