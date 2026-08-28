<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlEmojiStatusInputEmojiStatusCollectible (inputEmojiStatusCollectible). */
final class TlEmojiStatusInputEmojiStatusCollectibleFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEmojiStatusInputEmojiStatusCollectible> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEmojiStatusInputEmojiStatusCollectible::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'collectible_id' => 1002,
            'until' => 3,
        ];
    }
}
