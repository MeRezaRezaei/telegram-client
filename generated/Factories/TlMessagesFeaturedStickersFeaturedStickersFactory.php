<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesFeaturedStickersFeaturedStickers (messages.featuredStickers). */
final class TlMessagesFeaturedStickersFeaturedStickersFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFeaturedStickersFeaturedStickers> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFeaturedStickersFeaturedStickers::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'premium' => true,
            'hash' => 1003,
            'count' => 4,
        ];
    }
}
