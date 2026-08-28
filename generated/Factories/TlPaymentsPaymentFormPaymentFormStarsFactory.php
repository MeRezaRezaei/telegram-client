<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsPaymentFormPaymentFormStars (payments.paymentFormStars). */
final class TlPaymentsPaymentFormPaymentFormStarsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsPaymentFormPaymentFormStars> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsPaymentFormPaymentFormStars::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'form_id' => 1002,
            'bot_id' => 1003,
            'title' => 'title-4',
            'description' => 'description-5',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'invoice' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
