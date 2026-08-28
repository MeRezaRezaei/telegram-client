<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUserStatusUserStatusOffline (userStatusOffline). */
final class TlUserStatusUserStatusOfflineFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUserStatusUserStatusOffline> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUserStatusUserStatusOffline::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'was_online' => 1,
        ];
    }
}
