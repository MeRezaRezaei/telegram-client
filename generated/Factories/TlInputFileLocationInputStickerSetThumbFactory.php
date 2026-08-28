<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputFileLocationInputStickerSetThumb (inputStickerSetThumb). */
final class TlInputFileLocationInputStickerSetThumbFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputFileLocationInputStickerSetThumb> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputFileLocationInputStickerSetThumb::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'stickerset' => (string) new \Symfony\Component\Uid\UuidV7(),
            'thumb_version' => 2,
        ];
    }
}
