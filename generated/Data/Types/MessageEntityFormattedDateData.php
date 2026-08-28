<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageEntityFormattedDate of MessageEntity.
 */
final class MessageEntityFormattedDateData extends TlMessageEntityAbstractData
{
    public function __construct(
    public int $flags,
    public bool $relative,
    public bool $shortTime,
    public bool $longTime,
    public bool $shortDate,
    public bool $longDate,
    public bool $dayOfWeek,
    public int $offset,
    public int $length,
    public int $date,
    ) {
    }
}
