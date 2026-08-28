<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateManagedBot (updateManagedBot). */
final class TlUpdateUpdateManagedBotFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateManagedBot> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateManagedBot::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'user_id' => 1001,
            'bot_id' => 1002,
            'qts' => 3,
        ];
    }
}
