<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMediaMessageMediaDice (messageMediaDice). */
final class TlMessageMediaMessageMediaDiceFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaDice> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaDice::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'tl_value' => 2,
            'emoticon' => 'emoticon-3',
            'game_outcome' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
