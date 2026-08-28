<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlGroupCallParticipantVideoGroupCallParticipantVideo (groupCallParticipantVideo). */
final class TlGroupCallParticipantVideoGroupCallParticipantVideoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlGroupCallParticipantVideoGroupCallParticipantVideo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlGroupCallParticipantVideoGroupCallParticipantVideo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'paused' => true,
            'endpoint' => 'endpoint-3',
            'audio_source' => 4,
        ];
    }
}
