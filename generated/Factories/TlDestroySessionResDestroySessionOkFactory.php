<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDestroySessionResDestroySessionOk (destroy_session_ok). */
final class TlDestroySessionResDestroySessionOkFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDestroySessionResDestroySessionOk> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDestroySessionResDestroySessionOk::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'session_id' => 1001,
        ];
    }
}
