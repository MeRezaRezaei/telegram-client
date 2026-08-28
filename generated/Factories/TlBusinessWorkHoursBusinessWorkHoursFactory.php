<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBusinessWorkHoursBusinessWorkHours (businessWorkHours). */
final class TlBusinessWorkHoursBusinessWorkHoursFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessWorkHoursBusinessWorkHours> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessWorkHoursBusinessWorkHours::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'open_now' => true,
            'timezone_id' => 'timezone_id-3',
        ];
    }
}
