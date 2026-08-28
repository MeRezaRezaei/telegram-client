<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlVideoSizeVideoSizeStickerMarkup (videoSizeStickerMarkup). */
final class TlVideoSizeVideoSizeStickerMarkupFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlVideoSizeVideoSizeStickerMarkup> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlVideoSizeVideoSizeStickerMarkup::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'stickerset' => (string) new \Symfony\Component\Uid\UuidV7(),
            'sticker_id' => 1002,
        ];
    }
}
