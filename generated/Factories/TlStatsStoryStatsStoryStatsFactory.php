<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStatsStoryStatsStoryStats (stats.storyStats). */
final class TlStatsStoryStatsStoryStatsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsStoryStatsStoryStats> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsStoryStatsStoryStats::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'views_graph' => (string) new \Symfony\Component\Uid\UuidV7(),
            'reactions_by_emotion_graph' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
