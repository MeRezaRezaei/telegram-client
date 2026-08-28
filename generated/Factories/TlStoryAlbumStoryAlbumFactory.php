<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoryAlbumStoryAlbum (storyAlbum). */
final class TlStoryAlbumStoryAlbumFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryAlbumStoryAlbum> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryAlbumStoryAlbum::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'album_id' => 2,
            'title' => 'title-3',
            'icon_photo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'icon_video' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
