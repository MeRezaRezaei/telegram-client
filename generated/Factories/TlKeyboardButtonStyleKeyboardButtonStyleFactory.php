<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlKeyboardButtonStyleKeyboardButtonStyle (keyboardButtonStyle). */
final class TlKeyboardButtonStyleKeyboardButtonStyleFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonStyleKeyboardButtonStyle> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonStyleKeyboardButtonStyle::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'bg_primary' => true,
            'bg_danger' => true,
            'bg_success' => true,
            'icon' => 1005,
        ];
    }
}
