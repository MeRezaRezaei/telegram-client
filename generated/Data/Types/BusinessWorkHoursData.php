<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for businessWorkHours of BusinessWorkHours.
 */
final class BusinessWorkHoursData extends TlBusinessWorkHoursAbstractData
{
    public function __construct(
    public int $flags,
    public bool $openNow,
    public string $timezoneId,
    public array $weeklyOpen,
    ) {
    }
}
