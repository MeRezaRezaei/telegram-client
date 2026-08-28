<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateBotInlineSend (updateBotInlineSend). */
final class TlUpdateUpdateBotInlineSendFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotInlineSend> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotInlineSend::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'user_id' => 1002,
            'query' => 'query-3',
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'tl_id' => 'id-5',
            'msg_id' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
