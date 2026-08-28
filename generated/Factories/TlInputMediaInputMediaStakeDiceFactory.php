<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputMediaInputMediaStakeDice (inputMediaStakeDice). */
final class TlInputMediaInputMediaStakeDiceFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaStakeDice> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaStakeDice::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'game_hash' => 'game_hash-1',
            'ton_amount' => 1002,
            'client_seed' => 'Ynl0ZXMtMw==',
        ];
    }
}
