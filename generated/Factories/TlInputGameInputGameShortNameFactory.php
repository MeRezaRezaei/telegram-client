<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputGameInputGameShortName (inputGameShortName). */
final class TlInputGameInputGameShortNameFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputGameInputGameShortName> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputGameInputGameShortName::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'bot_id' => (string) new \Symfony\Component\Uid\UuidV7(),
            'short_name' => 'short_name-2',
        ];
    }
}
