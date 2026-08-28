<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantToggleAdmin (channelAdminLogEventActionParticipantToggleAdmin). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantToggleAdminFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantToggleAdmin> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantToggleAdmin::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'prev_participant' => (string) new \Symfony\Component\Uid\UuidV7(),
            'new_participant' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
