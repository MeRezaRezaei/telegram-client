<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageBlockPageBlockAudio (pageBlockAudio). */
final class TlPageBlockPageBlockAudioFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockAudio> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockAudio::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'audio_id' => 1001,
            'caption' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
