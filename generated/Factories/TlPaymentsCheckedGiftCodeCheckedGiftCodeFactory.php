<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsCheckedGiftCodeCheckedGiftCode (payments.checkedGiftCode). */
final class TlPaymentsCheckedGiftCodeCheckedGiftCodeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsCheckedGiftCodeCheckedGiftCode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsCheckedGiftCodeCheckedGiftCode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'via_giveaway' => true,
            'from_id' => (string) new \Symfony\Component\Uid\UuidV7(),
            'giveaway_msg_id' => 4,
            'to_id' => 1005,
            'date' => 6,
            'days' => 7,
            'used_date' => 8,
        ];
    }
}
