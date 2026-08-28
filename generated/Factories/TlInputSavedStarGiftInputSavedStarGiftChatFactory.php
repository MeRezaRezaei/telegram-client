<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputSavedStarGiftInputSavedStarGiftChat (inputSavedStarGiftChat). */
final class TlInputSavedStarGiftInputSavedStarGiftChatFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputSavedStarGiftInputSavedStarGiftChat> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputSavedStarGiftInputSavedStarGiftChat::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'saved_id' => 1002,
        ];
    }
}
