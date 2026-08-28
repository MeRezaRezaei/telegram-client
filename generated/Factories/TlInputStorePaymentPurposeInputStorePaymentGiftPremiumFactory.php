<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputStorePaymentPurposeInputStorePaymentGiftPremium (inputStorePaymentGiftPremium). */
final class TlInputStorePaymentPurposeInputStorePaymentGiftPremiumFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentGiftPremium> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentGiftPremium::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'user_id' => (string) new \Symfony\Component\Uid\UuidV7(),
            'currency' => 'currency-2',
            'amount' => 1003,
        ];
    }
}
