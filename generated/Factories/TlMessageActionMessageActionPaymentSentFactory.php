<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionPaymentSent (messageActionPaymentSent). */
final class TlMessageActionMessageActionPaymentSentFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPaymentSent> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPaymentSent::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'recurring_init' => true,
            'recurring_used' => true,
            'currency' => 'currency-4',
            'total_amount' => 1005,
            'invoice_slug' => 'invoice_slug-6',
            'subscription_until_date' => 7,
        ];
    }
}
