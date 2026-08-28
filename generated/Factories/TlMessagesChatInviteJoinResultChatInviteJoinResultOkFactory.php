<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesChatInviteJoinResultChatInviteJoinResultOk (messages.chatInviteJoinResultOk). */
final class TlMessagesChatInviteJoinResultChatInviteJoinResultOkFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatInviteJoinResultChatInviteJoinResultOk> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesChatInviteJoinResultChatInviteJoinResultOk::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'updates' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
