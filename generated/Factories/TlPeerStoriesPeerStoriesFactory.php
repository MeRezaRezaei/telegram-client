<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPeerStoriesPeerStories (peerStories). */
final class TlPeerStoriesPeerStoriesFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPeerStoriesPeerStories> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPeerStoriesPeerStories::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'max_read_id' => 3,
        ];
    }
}
