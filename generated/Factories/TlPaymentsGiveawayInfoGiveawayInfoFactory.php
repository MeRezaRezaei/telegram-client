<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsGiveawayInfoGiveawayInfo (payments.giveawayInfo). */
final class TlPaymentsGiveawayInfoGiveawayInfoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsGiveawayInfoGiveawayInfo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsGiveawayInfoGiveawayInfo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'participating' => true,
            'preparing_results' => true,
            'start_date' => 4,
            'joined_too_early_date' => 5,
            'admin_disallowed_chat_id' => 1006,
            'disallowed_country' => 'disallowed_country-7',
        ];
    }
}
