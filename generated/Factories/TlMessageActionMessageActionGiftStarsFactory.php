<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionGiftStars (messageActionGiftStars). */
final class TlMessageActionMessageActionGiftStarsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionGiftStars> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionGiftStars::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'currency' => 'currency-2',
            'amount' => 1003,
            'stars' => 1004,
            'crypto_currency' => 'crypto_currency-5',
            'crypto_amount' => 1006,
            'transaction_id' => 'transaction_id-7',
        ];
    }
}
