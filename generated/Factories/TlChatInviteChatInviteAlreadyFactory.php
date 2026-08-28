<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatInviteChatInviteAlready (chatInviteAlready). */
final class TlChatInviteChatInviteAlreadyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatInviteChatInviteAlready> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatInviteChatInviteAlready::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'chat' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
