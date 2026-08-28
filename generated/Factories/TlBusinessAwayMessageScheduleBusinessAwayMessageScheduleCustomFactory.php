<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBusinessAwayMessageScheduleBusinessAwayMessageScheduleCustom (businessAwayMessageScheduleCustom). */
final class TlBusinessAwayMessageScheduleBusinessAwayMessageScheduleCustomFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessAwayMessageScheduleBusinessAwayMessageScheduleCustom> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessAwayMessageScheduleBusinessAwayMessageScheduleCustom::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'start_date' => 1,
            'end_date' => 2,
        ];
    }
}
