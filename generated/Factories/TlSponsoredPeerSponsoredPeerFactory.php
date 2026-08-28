<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSponsoredPeerSponsoredPeer (sponsoredPeer). */
final class TlSponsoredPeerSponsoredPeerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSponsoredPeerSponsoredPeer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSponsoredPeerSponsoredPeer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'random_id' => 'Ynl0ZXMtMg==',
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'sponsor_info' => 'sponsor_info-4',
            'additional_info' => 'additional_info-5',
        ];
    }
}
