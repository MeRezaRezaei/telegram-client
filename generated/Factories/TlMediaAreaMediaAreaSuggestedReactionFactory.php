<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMediaAreaMediaAreaSuggestedReaction (mediaAreaSuggestedReaction). */
final class TlMediaAreaMediaAreaSuggestedReactionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaSuggestedReaction> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaSuggestedReaction::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'dark' => true,
            'flipped' => true,
            'coordinates' => (string) new \Symfony\Component\Uid\UuidV7(),
            'reaction' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
