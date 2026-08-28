<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputStorePaymentPurposeInputStorePaymentStarsGiveaway (inputStorePaymentStarsGiveaway). */
final class TlInputStorePaymentPurposeInputStorePaymentStarsGiveawayFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentStarsGiveaway> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStorePaymentPurposeInputStorePaymentStarsGiveaway::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'only_new_subscribers' => true,
            'winners_are_visible' => true,
            'stars' => 1004,
            'boost_peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'prize_description' => 'prize_description-6',
            'random_id' => 1007,
            'until_date' => 8,
            'currency' => 'currency-9',
            'amount' => 1010,
            'users' => 11,
        ];
    }
}
