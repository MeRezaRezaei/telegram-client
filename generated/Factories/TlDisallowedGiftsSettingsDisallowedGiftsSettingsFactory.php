<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDisallowedGiftsSettingsDisallowedGiftsSettings (disallowedGiftsSettings). */
final class TlDisallowedGiftsSettingsDisallowedGiftsSettingsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDisallowedGiftsSettingsDisallowedGiftsSettings> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDisallowedGiftsSettingsDisallowedGiftsSettings::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'disallow_unlimited_stargifts' => true,
            'disallow_limited_stargifts' => true,
            'disallow_unique_stargifts' => true,
            'disallow_premium_gifts' => true,
            'disallow_stargifts_from_channels' => true,
        ];
    }
}
