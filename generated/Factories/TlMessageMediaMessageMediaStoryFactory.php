<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMediaMessageMediaStory (messageMediaStory). */
final class TlMessageMediaMessageMediaStoryFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaStory> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaStory::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'via_mention' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'tl_id' => 4,
            'story' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
