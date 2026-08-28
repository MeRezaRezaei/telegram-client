<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelParticipantChannelParticipantLeft (channelParticipantLeft). */
final class TlChannelParticipantChannelParticipantLeftFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipantLeft> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipantLeft::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
