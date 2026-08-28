<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUserStatusUserStatusLastWeek (userStatusLastWeek). */
final class TlUserStatusUserStatusLastWeekFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUserStatusUserStatusLastWeek> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUserStatusUserStatusLastWeek::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'by_me' => true,
        ];
    }
}
