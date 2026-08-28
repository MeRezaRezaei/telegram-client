<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updates.state of updates.State.
 */
final class TlUpdatesStateData extends TlUpdatesStateAbstractData
{
    public function __construct(
    public int $pts,
    public int $qts,
    public int $date,
    public int $seq,
    public int $unreadCount,
    ) {
    }
}
