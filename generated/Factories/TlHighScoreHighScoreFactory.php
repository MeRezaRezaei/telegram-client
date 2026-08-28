<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHighScoreHighScore (highScore). */
final class TlHighScoreHighScoreFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHighScoreHighScore> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHighScoreHighScore::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'pos' => 1,
            'user_id' => 1002,
            'score' => 3,
        ];
    }
}
