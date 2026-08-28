<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateNewStoryReaction (updateNewStoryReaction). */
final class TlUpdateUpdateNewStoryReactionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateNewStoryReaction> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateNewStoryReaction::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'story_id' => 1,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'reaction' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
