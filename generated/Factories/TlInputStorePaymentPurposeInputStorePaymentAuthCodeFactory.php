<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputStorePaymentPurposeInputStorePaymentAuthCode (inputStorePaymentAuthCode). */
final class TlInputStorePaymentPurposeInputStorePaymentAuthCodeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentAuthCode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentAuthCode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'restore' => true,
            'phone_number' => 'phone_number-3',
            'phone_code_hash' => 'phone_code_hash-4',
            'premium_days' => 5,
            'currency' => 'currency-6',
            'amount' => 1007,
        ];
    }
}
