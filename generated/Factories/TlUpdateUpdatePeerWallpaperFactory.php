<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdatePeerWallpaper (updatePeerWallpaper). */
final class TlUpdateUpdatePeerWallpaperFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePeerWallpaper> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePeerWallpaper::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'wallpaper_overridden' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'wallpaper' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
