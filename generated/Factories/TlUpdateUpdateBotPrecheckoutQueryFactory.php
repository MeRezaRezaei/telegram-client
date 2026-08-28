<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateBotPrecheckoutQuery (updateBotPrecheckoutQuery). */
final class TlUpdateUpdateBotPrecheckoutQueryFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotPrecheckoutQuery> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotPrecheckoutQuery::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'query_id' => 1002,
            'user_id' => 1003,
            'payload' => 'Ynl0ZXMtNA==',
            'info' => (string) new \Symfony\Component\Uid\UuidV7(),
            'shipping_option_id' => 'shipping_option_id-6',
            'currency' => 'currency-7',
            'total_amount' => 1008,
        ];
    }
}
