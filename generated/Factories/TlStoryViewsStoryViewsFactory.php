<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoryViewsStoryViews (storyViews). */
final class TlStoryViewsStoryViewsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewsStoryViews> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewsStoryViews::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'has_viewers' => true,
            'views_count' => 3,
            'forwards_count' => 4,
            'reactions_count' => 5,
        ];
    }
}
