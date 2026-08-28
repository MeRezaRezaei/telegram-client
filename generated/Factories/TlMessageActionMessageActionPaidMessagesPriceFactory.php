<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionPaidMessagesPrice (messageActionPaidMessagesPrice). */
final class TlMessageActionMessageActionPaidMessagesPriceFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPaidMessagesPrice> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPaidMessagesPrice::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'broadcast_messages_allowed' => true,
            'stars' => 1003,
        ];
    }
}
