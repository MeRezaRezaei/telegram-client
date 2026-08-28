<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateStoriesStealthMode (updateStoriesStealthMode). */
final class TlUpdateUpdateStoriesStealthModeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateStoriesStealthMode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateStoriesStealthMode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'stealth_mode' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
