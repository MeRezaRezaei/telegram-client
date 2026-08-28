<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlTopPeerCategoryPeersTopPeerCategoryPeers (topPeerCategoryPeers). */
final class TlTopPeerCategoryPeersTopPeerCategoryPeersFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlTopPeerCategoryPeersTopPeerCategoryPeers> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlTopPeerCategoryPeersTopPeerCategoryPeers::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'category' => (string) new \Symfony\Component\Uid\UuidV7(),
            'count' => 2,
        ];
    }
}
