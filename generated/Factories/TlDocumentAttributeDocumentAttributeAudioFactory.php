<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDocumentAttributeDocumentAttributeAudio (documentAttributeAudio). */
final class TlDocumentAttributeDocumentAttributeAudioFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDocumentAttributeDocumentAttributeAudio> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDocumentAttributeDocumentAttributeAudio::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'voice' => true,
            'duration' => 3,
            'title' => 'title-4',
            'performer' => 'performer-5',
            'waveform' => 'Ynl0ZXMtNg==',
        ];
    }
}
