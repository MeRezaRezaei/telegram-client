<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsStarsStatusStarsStatus (payments.starsStatus). */
final class TlPaymentsStarsStatusStarsStatusFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsStatusStarsStatus> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsStatusStarsStatus::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'balance' => (string) new \Symfony\Component\Uid\UuidV7(),
            'subscriptions_next_offset' => 'subscriptions_next_offset-3',
            'subscriptions_missing_balance' => 1004,
            'next_offset' => 'next_offset-5',
        ];
    }
}
