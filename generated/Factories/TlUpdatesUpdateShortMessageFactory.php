<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdatesUpdateShortMessage (updateShortMessage). */
final class TlUpdatesUpdateShortMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdateShortMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdateShortMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'out' => true,
            'mentioned' => true,
            'media_unread' => true,
            'silent' => true,
            'tl_id' => 6,
            'user_id' => 1007,
            'message' => 'message-8',
            'pts' => 9,
            'pts_count' => 10,
            'date' => 11,
            'fwd_from' => (string) new \Symfony\Component\Uid\UuidV7(),
            'via_bot_id' => 1013,
            'reply_to' => (string) new \Symfony\Component\Uid\UuidV7(),
            'ttl_period' => 15,
        ];
    }
}
