<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlCodeSettingsCodeSettings (codeSettings). */
final class TlCodeSettingsCodeSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlCodeSettingsCodeSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlCodeSettingsCodeSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'allow_flashcall' => true,
            'current_number' => true,
            'allow_app_hash' => true,
            'allow_missed_call' => true,
            'allow_firebase' => true,
            'unknown_number' => true,
            'token' => 'token-8',
            'app_sandbox' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
