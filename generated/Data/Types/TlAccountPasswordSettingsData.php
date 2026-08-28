<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.passwordSettings of account.PasswordSettings.
 */
final class TlAccountPasswordSettingsData extends TlAccountPasswordSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public string $email,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSecureSecretSettingsAbstractData $secureSettings,
    ) {
    }
}
