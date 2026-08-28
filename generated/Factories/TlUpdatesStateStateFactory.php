<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdatesStateState (updates.state). */
final class TlUpdatesStateStateFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesStateState> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesStateState::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'pts' => 1,
            'qts' => 2,
            'date' => 3,
            'seq' => 4,
            'unread_count' => 5,
        ];
    }
}
