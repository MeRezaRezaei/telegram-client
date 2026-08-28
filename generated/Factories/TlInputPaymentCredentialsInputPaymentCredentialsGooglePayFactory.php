<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputPaymentCredentialsInputPaymentCredentialsGooglePay (inputPaymentCredentialsGooglePay). */
final class TlInputPaymentCredentialsInputPaymentCredentialsGooglePayFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPaymentCredentialsInputPaymentCredentialsGooglePay> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPaymentCredentialsInputPaymentCredentialsGooglePay::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'payment_token' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
