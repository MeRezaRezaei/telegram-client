<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDecryptedMessageMediaDecryptedMessageMediaAudio (decryptedMessageMediaAudio). */
final class TlDecryptedMessageMediaDecryptedMessageMediaAudioFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageMediaDecryptedMessageMediaAudio> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageMediaDecryptedMessageMediaAudio::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'duration' => 1,
            'mime_type' => 'mime_type-2',
            'tl_size' => 3,
            'tl_key' => 'Ynl0ZXMtNA==',
            'iv' => 'Ynl0ZXMtNQ==',
        ];
    }
}
