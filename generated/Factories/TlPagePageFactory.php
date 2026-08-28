<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPagePage (page). */
final class TlPagePageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPagePage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPagePage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'part' => true,
            'rtl' => true,
            'v2' => true,
            'url' => 'url-5',
            'views' => 6,
        ];
    }
}
