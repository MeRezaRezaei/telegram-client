<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelParticipantChannelParticipant (channelParticipant). */
final class TlChannelParticipantChannelParticipantFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipant> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantChannelParticipant::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'user_id' => 1002,
            'date' => 3,
            'subscription_until_date' => 4,
            'rank' => 'rank-5',
        ];
    }
}
