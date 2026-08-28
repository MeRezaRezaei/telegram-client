<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateEmojiGameInfo (updateEmojiGameInfo). */
final class TlUpdateUpdateEmojiGameInfoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateEmojiGameInfo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateEmojiGameInfo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'info' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
