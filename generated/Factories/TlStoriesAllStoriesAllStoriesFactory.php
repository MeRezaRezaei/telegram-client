<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoriesAllStoriesAllStories (stories.allStories). */
final class TlStoriesAllStoriesAllStoriesFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesAllStoriesAllStories> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesAllStoriesAllStories::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'has_more' => true,
            'count' => 3,
            'state' => 'state-4',
            'stealth_mode' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
