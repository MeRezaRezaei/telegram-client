<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageEntityMessageEntityPre (messageEntityPre). */
final class TlMessageEntityMessageEntityPreFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityPre> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityPre::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_offset' => 1,
            'length' => 2,
            'language' => 'language-3',
        ];
    }
}
