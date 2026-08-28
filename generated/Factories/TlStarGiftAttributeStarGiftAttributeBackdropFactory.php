<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStarGiftAttributeStarGiftAttributeBackdrop (starGiftAttributeBackdrop). */
final class TlStarGiftAttributeStarGiftAttributeBackdropFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarGiftAttributeStarGiftAttributeBackdrop> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStarGiftAttributeStarGiftAttributeBackdrop::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => 'name-1',
            'backdrop_id' => 2,
            'center_color' => 3,
            'edge_color' => 4,
            'pattern_color' => 5,
            'text_color' => 6,
            'rarity' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
