<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatParticipantChatParticipantAdmin (chatParticipantAdmin). */
final class TlChatParticipantChatParticipantAdminFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatParticipantChatParticipantAdmin> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatParticipantChatParticipantAdmin::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'user_id' => 1002,
            'inviter_id' => 1003,
            'date' => 4,
            'rank' => 'rank-5',
        ];
    }
}
