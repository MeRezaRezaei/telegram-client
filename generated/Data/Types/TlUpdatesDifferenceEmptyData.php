<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updates.differenceEmpty of updates.Difference.
 */
final class TlUpdatesDifferenceEmptyData extends TlUpdatesDifferenceAbstractData
{
    public function __construct(
    public int $date,
    public int $seq,
    ) {
    }
}
