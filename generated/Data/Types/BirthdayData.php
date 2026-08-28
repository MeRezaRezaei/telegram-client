<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for birthday of Birthday.
 */
final class BirthdayData extends TlBirthdayAbstractData
{
    public function __construct(
    public int $flags,
    public int $day,
    public int $month,
    public int $year,
    ) {
    }
}
