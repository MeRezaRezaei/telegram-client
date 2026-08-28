<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotVerificationBotVerification (botVerification). */
final class TlBotVerificationBotVerificationFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotVerificationBotVerification> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotVerificationBotVerification::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'bot_id' => 1001,
            'icon' => 1002,
            'description' => 'description-3',
        ];
    }
}
