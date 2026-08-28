<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for storyViews of StoryViews.
 */
final class StoryViewsData extends TlStoryViewsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $hasViewers,
    public int $viewsCount,
    public int $forwardsCount,
    public ?array $reactions,
    public int $reactionsCount,
    public ?array $recentViewers,
    ) {
    }
}
