<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsStarsRevenueStatsStarsRevenueStats (payments.starsRevenueStats). */
final class TlPaymentsStarsRevenueStatsStarsRevenueStatsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsRevenueStatsStarsRevenueStats> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarsRevenueStatsStarsRevenueStats::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'top_hours_graph' => (string) new \Symfony\Component\Uid\UuidV7(),
            'revenue_graph' => (string) new \Symfony\Component\Uid\UuidV7(),
            'status' => (string) new \Symfony\Component\Uid\UuidV7(),
            'usd_rate' => 0.5,
        ];
    }
}
