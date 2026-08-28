<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRequestedPeerRequestedPeerUser (requestedPeerUser). */
final class TlRequestedPeerRequestedPeerUserFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRequestedPeerRequestedPeerUser> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRequestedPeerRequestedPeerUser::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'user_id' => 1002,
            'first_name' => 'first_name-3',
            'last_name' => 'last_name-4',
            'username' => 'username-5',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
