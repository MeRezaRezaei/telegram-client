<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoriesStealthModeStoriesStealthMode (storiesStealthMode). */
final class TlStoriesStealthModeStoriesStealthModeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesStealthModeStoriesStealthMode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoriesStealthModeStoriesStealthMode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'active_until_date' => 2,
            'cooldown_until_date' => 3,
        ];
    }
}
