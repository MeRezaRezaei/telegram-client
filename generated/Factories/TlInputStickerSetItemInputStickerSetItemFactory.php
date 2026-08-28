<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputStickerSetItemInputStickerSetItem (inputStickerSetItem). */
final class TlInputStickerSetItemInputStickerSetItemFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStickerSetItemInputStickerSetItem> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStickerSetItemInputStickerSetItem::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'document' => (string) new \Symfony\Component\Uid\UuidV7(),
            'emoji' => 'emoji-3',
            'mask_coords' => (string) new \Symfony\Component\Uid\UuidV7(),
            'keywords' => 'keywords-5',
        ];
    }
}
