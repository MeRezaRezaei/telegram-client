<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStarsRevenueStatusStarsRevenueStatus (starsRevenueStatus). */
final class TlStarsRevenueStatusStarsRevenueStatusFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarsRevenueStatusStarsRevenueStatus> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarsRevenueStatusStarsRevenueStatus::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'withdrawal_enabled' => true,
            'current_balance' => (string) new \Symfony\Component\Uid\UuidV7(),
            'available_balance' => (string) new \Symfony\Component\Uid\UuidV7(),
            'overall_revenue' => (string) new \Symfony\Component\Uid\UuidV7(),
            'next_withdrawal_at' => 6,
        ];
    }
}
