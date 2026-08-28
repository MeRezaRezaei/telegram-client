<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlFactCheckFactCheck (factCheck). */
final class TlFactCheckFactCheckFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFactCheckFactCheck> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFactCheckFactCheck::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'need_check' => true,
            'country' => 'country-3',
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
            'hash' => 1005,
        ];
    }
}
