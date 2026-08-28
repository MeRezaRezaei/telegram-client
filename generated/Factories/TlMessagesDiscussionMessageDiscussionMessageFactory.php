<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesDiscussionMessageDiscussionMessage (messages.discussionMessage). */
final class TlMessagesDiscussionMessageDiscussionMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesDiscussionMessageDiscussionMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesDiscussionMessageDiscussionMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'max_id' => 2,
            'read_inbox_max_id' => 3,
            'read_outbox_max_id' => 4,
            'unread_count' => 5,
        ];
    }
}
