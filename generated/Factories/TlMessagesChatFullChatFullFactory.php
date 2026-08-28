<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesChatFullChatFull (messages.chatFull). */
final class TlMessagesChatFullChatFullFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatFullChatFull> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatFullChatFull::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'full_chat' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
