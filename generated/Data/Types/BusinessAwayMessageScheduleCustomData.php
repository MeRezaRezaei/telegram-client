<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for businessAwayMessageScheduleCustom of BusinessAwayMessageSchedule.
 */
final class BusinessAwayMessageScheduleCustomData extends TlBusinessAwayMessageScheduleAbstractData
{
    public function __construct(
    public int $startDate,
    public int $endDate,
    ) {
    }
}
