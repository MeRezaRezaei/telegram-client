<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateBotInlineQuery (updateBotInlineQuery). */
final class TlUpdateUpdateBotInlineQueryFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotInlineQuery> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotInlineQuery::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'query_id' => 1002,
            'user_id' => 1003,
            'query' => 'query-4',
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'peer_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'tl_offset' => 'offset-7',
        ];
    }
}
