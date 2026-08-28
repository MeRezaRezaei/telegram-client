<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateBotMessageReaction (updateBotMessageReaction). */
final class TlUpdateUpdateBotMessageReactionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotMessageReaction> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotMessageReaction::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'msg_id' => 2,
            'date' => 3,
            'actor' => (string) new \Symfony\Component\Uid\UuidV7(),
            'qts' => 5,
        ];
    }
}
