<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsGiveawayInfoGiveawayInfoResults (payments.giveawayInfoResults). */
final class TlPaymentsGiveawayInfoGiveawayInfoResultsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsGiveawayInfoGiveawayInfoResults> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsGiveawayInfoGiveawayInfoResults::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'winner' => true,
            'refunded' => true,
            'start_date' => 4,
            'gift_code_slug' => 'gift_code_slug-5',
            'stars_prize' => 1006,
            'finish_date' => 7,
            'winners_count' => 8,
            'activated_count' => 9,
        ];
    }
}
