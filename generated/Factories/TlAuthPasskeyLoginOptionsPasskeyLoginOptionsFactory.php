<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuthPasskeyLoginOptionsPasskeyLoginOptions (auth.passkeyLoginOptions). */
final class TlAuthPasskeyLoginOptionsPasskeyLoginOptionsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthPasskeyLoginOptionsPasskeyLoginOptions> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthPasskeyLoginOptionsPasskeyLoginOptions::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'options' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
