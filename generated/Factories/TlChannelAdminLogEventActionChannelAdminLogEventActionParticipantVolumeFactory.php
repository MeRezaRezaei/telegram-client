<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantVolume (channelAdminLogEventActionParticipantVolume). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantVolumeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantVolume> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionParticipantVolume::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'participant' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
