<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatParticipantsChatParticipantsForbidden (chatParticipantsForbidden). */
final class TlChatParticipantsChatParticipantsForbiddenFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatParticipantsChatParticipantsForbidden> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatParticipantsChatParticipantsForbidden::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'chat_id' => 1002,
            'self_participant' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
