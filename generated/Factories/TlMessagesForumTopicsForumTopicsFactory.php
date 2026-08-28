<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesForumTopicsForumTopics (messages.forumTopics). */
final class TlMessagesForumTopicsForumTopicsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesForumTopicsForumTopics> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesForumTopicsForumTopics::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'order_by_create_date' => true,
            'count' => 3,
            'pts' => 4,
        ];
    }
}
