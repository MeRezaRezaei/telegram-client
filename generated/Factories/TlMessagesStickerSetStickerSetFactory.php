<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesStickerSetStickerSet (messages.stickerSet). */
final class TlMessagesStickerSetStickerSetFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesStickerSetStickerSet> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesStickerSetStickerSet::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'set' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
