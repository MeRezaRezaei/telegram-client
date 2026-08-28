<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPeerBlockedPeerBlocked (peerBlocked). */
final class TlPeerBlockedPeerBlockedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPeerBlockedPeerBlocked> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPeerBlockedPeerBlocked::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer_id' => (string) new \Symfony\Component\Uid\UuidV7(),
            'date' => 2,
        ];
    }
}
