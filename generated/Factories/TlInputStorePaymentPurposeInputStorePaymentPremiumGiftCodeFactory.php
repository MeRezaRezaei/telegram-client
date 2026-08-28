<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputStorePaymentPurposeInputStorePaymentPremiumGiftCode (inputStorePaymentPremiumGiftCode). */
final class TlInputStorePaymentPurposeInputStorePaymentPremiumGiftCodeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentPremiumGiftCode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentPremiumGiftCode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'boost_peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'currency' => 'currency-3',
            'amount' => 1004,
            'message' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
