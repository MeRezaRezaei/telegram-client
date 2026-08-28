<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStatsGraphStatsGraph (statsGraph). */
final class TlStatsGraphStatsGraphFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsGraphStatsGraph> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStatsGraphStatsGraph::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'json' => (string) new \Symfony\Component\Uid\UuidV7(),
            'zoom_token' => 'zoom_token-3',
        ];
    }
}
