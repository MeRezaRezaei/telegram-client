<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdatesUpdatesCombined (updatesCombined). */
final class TlUpdatesUpdatesCombinedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesCombined> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesCombined::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'date' => 1,
            'seq_start' => 2,
            'seq' => 3,
        ];
    }
}
