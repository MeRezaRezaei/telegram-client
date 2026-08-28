<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelParticipantsFilterChannelParticipantsMentions (channelParticipantsMentions). */
final class TlChannelParticipantsFilterChannelParticipantsMentionsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantsFilterChannelParticipantsMentions> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelParticipantsFilterChannelParticipantsMentions::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'q' => 'q-2',
            'top_msg_id' => 3,
        ];
    }
}
