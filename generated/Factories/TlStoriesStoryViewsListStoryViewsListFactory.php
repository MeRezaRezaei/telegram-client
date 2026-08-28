<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoriesStoryViewsListStoryViewsList (stories.storyViewsList). */
final class TlStoriesStoryViewsListStoryViewsListFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesStoryViewsListStoryViewsList> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesStoryViewsListStoryViewsList::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'count' => 2,
            'views_count' => 3,
            'forwards_count' => 4,
            'reactions_count' => 5,
            'next_offset' => 'next_offset-6',
        ];
    }
}
