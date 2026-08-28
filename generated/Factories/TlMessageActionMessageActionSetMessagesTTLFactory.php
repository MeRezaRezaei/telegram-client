<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionSetMessagesTTL (messageActionSetMessagesTTL). */
final class TlMessageActionMessageActionSetMessagesTTLFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionSetMessagesTTL> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionSetMessagesTTL::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'period' => 2,
            'auto_setting_from' => 1003,
        ];
    }
}
