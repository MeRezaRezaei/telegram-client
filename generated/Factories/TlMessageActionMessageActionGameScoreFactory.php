<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionGameScore (messageActionGameScore). */
final class TlMessageActionMessageActionGameScoreFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionGameScore> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionGameScore::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'game_id' => 1001,
            'score' => 2,
        ];
    }
}
