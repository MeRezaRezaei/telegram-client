<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputPaymentCredentialsInputPaymentCredentials (inputPaymentCredentials). */
final class TlInputPaymentCredentialsInputPaymentCredentialsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPaymentCredentialsInputPaymentCredentials> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPaymentCredentialsInputPaymentCredentials::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'save' => true,
            'data' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
