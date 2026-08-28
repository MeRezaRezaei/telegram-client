<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesEmojiGameInfoEmojiGameDiceInfo (messages.emojiGameDiceInfo). */
final class TlMessagesEmojiGameInfoEmojiGameDiceInfoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesEmojiGameInfoEmojiGameDiceInfo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesEmojiGameInfoEmojiGameDiceInfo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'game_hash' => 'game_hash-2',
            'prev_stake' => 1003,
            'current_streak' => 4,
            'plays_left' => 5,
        ];
    }
}
