<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsPaymentReceiptPaymentReceiptStars (payments.paymentReceiptStars). */
final class TlPaymentsPaymentReceiptPaymentReceiptStarsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsPaymentReceiptPaymentReceiptStars> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsPaymentReceiptPaymentReceiptStars::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'date' => 2,
            'bot_id' => 1003,
            'title' => 'title-4',
            'description' => 'description-5',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'invoice' => (string) new \Symfony\Component\Uid\UuidV7(),
            'currency' => 'currency-8',
            'total_amount' => 1009,
            'transaction_id' => 'transaction_id-10',
        ];
    }
}
