<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSavedReactionTagSavedReactionTag (savedReactionTag). */
final class TlSavedReactionTagSavedReactionTagFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSavedReactionTagSavedReactionTag> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSavedReactionTagSavedReactionTag::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'reaction' => (string) new \Symfony\Component\Uid\UuidV7(),
            'title' => 'title-3',
            'count' => 4,
        ];
    }
}
