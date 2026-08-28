<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.passportConfig of help.PassportConfig.
 */
final class TlHelpPassportConfigData extends TlHelpPassportConfigAbstractData
{
    public function __construct(
    public int $hash,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $countriesLangs,
    ) {
    }
}
