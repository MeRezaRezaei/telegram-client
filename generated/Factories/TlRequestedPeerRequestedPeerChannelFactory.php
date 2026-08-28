<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRequestedPeerRequestedPeerChannel (requestedPeerChannel). */
final class TlRequestedPeerRequestedPeerChannelFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRequestedPeerRequestedPeerChannel> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRequestedPeerRequestedPeerChannel::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'channel_id' => 1002,
            'title' => 'title-3',
            'username' => 'username-4',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
