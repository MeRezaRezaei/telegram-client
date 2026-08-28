<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelParticipantChannelParticipantCreator (channelParticipantCreator). */
final class TlChannelParticipantChannelParticipantCreatorFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipantCreator> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipantCreator::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'user_id' => 1002,
            'admin_rights' => (string) new \Symfony\Component\Uid\UuidV7(),
            'rank' => 'rank-4',
        ];
    }
}
