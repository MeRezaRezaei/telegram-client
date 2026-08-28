<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for help.timezonesList of help.TimezonesList.
 */
final class TlHelpTimezonesListData extends TlHelpTimezonesListAbstractData
{
    public function __construct(
    public array $timezones,
    public int $hash,
    ) {
    }
}
