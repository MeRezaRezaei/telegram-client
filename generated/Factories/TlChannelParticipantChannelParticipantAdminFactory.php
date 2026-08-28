<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelParticipantChannelParticipantAdmin (channelParticipantAdmin). */
final class TlChannelParticipantChannelParticipantAdminFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipantAdmin> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipantAdmin::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'can_edit' => true,
            'self' => true,
            'user_id' => 1004,
            'inviter_id' => 1005,
            'promoted_by' => 1006,
            'date' => 7,
            'admin_rights' => (string) new \Symfony\Component\Uid\UuidV7(),
            'rank' => 'rank-9',
        ];
    }
}
