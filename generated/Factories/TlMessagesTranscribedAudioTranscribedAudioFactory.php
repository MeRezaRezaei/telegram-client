<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesTranscribedAudioTranscribedAudio (messages.transcribedAudio). */
final class TlMessagesTranscribedAudioTranscribedAudioFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesTranscribedAudioTranscribedAudio> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesTranscribedAudioTranscribedAudio::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'pending' => true,
            'transcription_id' => 1003,
            'text' => 'text-4',
            'trial_remains_num' => 5,
            'trial_remains_until_date' => 6,
        ];
    }
}
