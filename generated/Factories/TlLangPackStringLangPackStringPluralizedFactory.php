<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlLangPackStringLangPackStringPluralized (langPackStringPluralized). */
final class TlLangPackStringLangPackStringPluralizedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlLangPackStringLangPackStringPluralized> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlLangPackStringLangPackStringPluralized::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'tl_key' => 'key-2',
            'zero_value' => 'zero_value-3',
            'one_value' => 'one_value-4',
            'two_value' => 'two_value-5',
            'few_value' => 'few_value-6',
            'many_value' => 'many_value-7',
            'other_value' => 'other_value-8',
        ];
    }
}
