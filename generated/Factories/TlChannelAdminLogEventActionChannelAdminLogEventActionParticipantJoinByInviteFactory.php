<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantJoinByInvite (channelAdminLogEventActionParticipantJoinByInvite). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantJoinByInviteFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantJoinByInvite> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantJoinByInvite::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'via_chatlist' => true,
            'invite' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
