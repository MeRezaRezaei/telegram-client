<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateChatParticipantAdmin (updateChatParticipantAdmin). */
final class TlUpdateUpdateChatParticipantAdminFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateChatParticipantAdmin> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateChatParticipantAdmin::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'chat_id' => 1001,
            'user_id' => 1002,
            'is_admin' => (string) new \Symfony\Component\Uid\UuidV7(),
            'version' => 4,
        ];
    }
}
