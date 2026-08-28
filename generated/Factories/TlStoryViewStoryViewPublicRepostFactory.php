<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlStoryViewStoryViewPublicRepost (storyViewPublicRepost). */
final class TlStoryViewStoryViewPublicRepostFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewStoryViewPublicRepost> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlStoryViewStoryViewPublicRepost::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'blocked' => true,
            'blocked_my_stories_from' => true,
            'peer_id' => (string) new \Symfony\Component\Uid\UuidV7(),
            'story' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
