<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesPeerSettingsPeerSettings (messages.peerSettings). */
final class TlMessagesPeerSettingsPeerSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPeerSettingsPeerSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPeerSettingsPeerSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'settings' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
