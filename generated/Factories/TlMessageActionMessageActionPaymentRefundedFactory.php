<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionPaymentRefunded (messageActionPaymentRefunded). */
final class TlMessageActionMessageActionPaymentRefundedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPaymentRefunded> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPaymentRefunded::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'currency' => 'currency-3',
            'total_amount' => 1004,
            'payload' => 'Ynl0ZXMtNQ==',
            'charge' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
