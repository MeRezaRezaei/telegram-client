<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBusinessWeeklyOpenBusinessWeeklyOpen (businessWeeklyOpen). */
final class TlBusinessWeeklyOpenBusinessWeeklyOpenFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessWeeklyOpenBusinessWeeklyOpen> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessWeeklyOpenBusinessWeeklyOpen::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'start_minute' => 1,
            'end_minute' => 2,
        ];
    }
}
