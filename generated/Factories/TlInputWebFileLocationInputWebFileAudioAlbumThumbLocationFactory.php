<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputWebFileLocationInputWebFileAudioAlbumThumbLocation (inputWebFileAudioAlbumThumbLocation). */
final class TlInputWebFileLocationInputWebFileAudioAlbumThumbLocationFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputWebFileLocationInputWebFileAudioAlbumThumbLocation> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputWebFileLocationInputWebFileAudioAlbumThumbLocation::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'small' => true,
            'document' => (string) new \Symfony\Component\Uid\UuidV7(),
            'title' => 'title-4',
            'performer' => 'performer-5',
        ];
    }
}
