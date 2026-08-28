<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stats.storyStats of stats.StoryStats.
 */
final class TlStatsStoryStatsData extends TlStatsStoryStatsAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $viewsGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $reactionsByEmotionGraph,
    ) {
    }
}
