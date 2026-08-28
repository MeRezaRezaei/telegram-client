<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageEntityMessageEntityTextUrl (messageEntityTextUrl). */
final class TlMessageEntityMessageEntityTextUrlFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityTextUrl> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityTextUrl::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_offset' => 1,
            'length' => 2,
            'url' => 'url-3',
        ];
    }
}
