<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStickerSetCoveredStickerSetMultiCovered (stickerSetMultiCovered). */
final class TlStickerSetCoveredStickerSetMultiCoveredFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStickerSetCoveredStickerSetMultiCovered> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStickerSetCoveredStickerSetMultiCovered::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'set' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
