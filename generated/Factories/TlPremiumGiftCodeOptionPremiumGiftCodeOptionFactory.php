<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPremiumGiftCodeOptionPremiumGiftCodeOption (premiumGiftCodeOption). */
final class TlPremiumGiftCodeOptionPremiumGiftCodeOptionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPremiumGiftCodeOptionPremiumGiftCodeOption> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPremiumGiftCodeOptionPremiumGiftCodeOption::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'users' => 2,
            'months' => 3,
            'store_product' => 'store_product-4',
            'store_quantity' => 5,
            'currency' => 'currency-6',
            'amount' => 1007,
        ];
    }
}
