<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateTheme (updateTheme). */
final class TlUpdateUpdateThemeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateTheme> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateTheme::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'theme' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
