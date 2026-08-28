<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesFoundStickersFoundStickers (messages.foundStickers). */
final class TlMessagesFoundStickersFoundStickersFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFoundStickersFoundStickers> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesFoundStickersFoundStickers::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'next_offset' => 2,
            'hash' => 1003,
        ];
    }
}
