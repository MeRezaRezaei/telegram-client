<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateTranscribedAudio (updateTranscribedAudio). */
final class TlUpdateUpdateTranscribedAudioFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateTranscribedAudio> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateTranscribedAudio::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'pending' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'msg_id' => 4,
            'transcription_id' => 1005,
            'text' => 'text-6',
        ];
    }
}
