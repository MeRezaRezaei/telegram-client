<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for recentStory of RecentStory.
 */
final class RecentStoryData extends TlRecentStoryAbstractData
{
    public function __construct(
    public int $flags,
    public bool $live,
    public int $maxId,
    ) {
    }
}
