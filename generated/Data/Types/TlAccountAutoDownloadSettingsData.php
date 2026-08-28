<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for account.autoDownloadSettings of account.AutoDownloadSettings.
 */
final class TlAccountAutoDownloadSettingsData extends TlAccountAutoDownloadSettingsAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAutoDownloadSettingsAbstractData $low,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAutoDownloadSettingsAbstractData $medium,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlAutoDownloadSettingsAbstractData $high,
    ) {
    }
}
