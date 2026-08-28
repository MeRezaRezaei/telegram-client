<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for stories.storyViews of stories.StoryViews.
 */
final class TlStoriesStoryViewsData extends TlStoriesStoryViewsAbstractData
{
    public function __construct(
    public array $views,
    public array $users,
    ) {
    }
}
