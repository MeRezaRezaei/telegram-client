<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageBlockInputPageBlockMap (inputPageBlockMap). */
final class TlPageBlockInputPageBlockMapFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockInputPageBlockMap> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockInputPageBlockMap::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'zoom' => 2,
            'w' => 3,
            'h' => 4,
            'caption' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
