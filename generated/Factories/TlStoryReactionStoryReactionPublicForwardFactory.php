<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoryReactionStoryReactionPublicForward (storyReactionPublicForward). */
final class TlStoryReactionStoryReactionPublicForwardFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryReactionStoryReactionPublicForward> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryReactionStoryReactionPublicForward::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'message' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
