<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputStickerSetInputStickerSetID (inputStickerSetID). */
final class TlInputStickerSetInputStickerSetIDFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStickerSetInputStickerSetID> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputStickerSetInputStickerSetID::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 1001,
            'access_hash' => 1002,
        ];
    }
}
