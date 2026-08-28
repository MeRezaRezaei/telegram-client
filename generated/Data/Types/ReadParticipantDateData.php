<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for readParticipantDate of ReadParticipantDate.
 */
final class ReadParticipantDateData extends TlReadParticipantDateAbstractData
{
    public function __construct(
    public int $userId,
    public int $date,
    ) {
    }
}
