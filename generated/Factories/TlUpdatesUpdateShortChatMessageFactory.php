<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdatesUpdateShortChatMessage (updateShortChatMessage). */
final class TlUpdatesUpdateShortChatMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdateShortChatMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdateShortChatMessage::class;

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
            'from_id' => 1007,
            'chat_id' => 1008,
            'message' => 'message-9',
            'pts' => 10,
            'pts_count' => 11,
            'date' => 12,
            'fwd_from' => (string) new \Symfony\Component\Uid\UuidV7(),
            'via_bot_id' => 1014,
            'reply_to' => (string) new \Symfony\Component\Uid\UuidV7(),
            'ttl_period' => 16,
        ];
    }
}
