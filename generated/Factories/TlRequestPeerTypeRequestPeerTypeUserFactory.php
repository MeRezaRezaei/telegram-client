<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRequestPeerTypeRequestPeerTypeUser (requestPeerTypeUser). */
final class TlRequestPeerTypeRequestPeerTypeUserFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRequestPeerTypeRequestPeerTypeUser> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRequestPeerTypeRequestPeerTypeUser::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'bot' => (string) new \Symfony\Component\Uid\UuidV7(),
            'premium' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
