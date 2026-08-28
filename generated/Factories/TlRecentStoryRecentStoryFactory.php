<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRecentStoryRecentStory (recentStory). */
final class TlRecentStoryRecentStoryFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRecentStoryRecentStory> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRecentStoryRecentStory::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'live' => true,
            'max_id' => 3,
        ];
    }
}
