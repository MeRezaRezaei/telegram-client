<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botVerifierSettings of BotVerifierSettings.
 */
final class BotVerifierSettingsData extends TlBotVerifierSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $canModifyCustomDescription,
    public int $icon,
    public string $company,
    public string $customDescription,
    ) {
    }
}
