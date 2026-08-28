<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stats.broadcastStats of stats.BroadcastStats.
 */
final class TlStatsBroadcastStatsData extends TlStatsBroadcastStatsAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsDateRangeDaysAbstractData $period,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $followers,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $viewsPerPost,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $sharesPerPost,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $reactionsPerPost,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $viewsPerStory,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $sharesPerStory,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsAbsValueAndPrevAbstractData $reactionsPerStory,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsPercentValueAbstractData $enabledNotifications,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $growthGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $followersGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $muteGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $topHoursGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $interactionsGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $ivInteractionsGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $viewsBySourceGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $newFollowersBySourceGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $languagesGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $reactionsByEmotionGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $storyInteractionsGraph,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStatsGraphAbstractData $storyReactionsByEmotionGraph,
    public array $recentPostsInteractions,
    ) {
    }
}
