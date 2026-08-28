<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlConnectedBotConnectedBot (connectedBot). */
final class TlConnectedBotConnectedBotFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlConnectedBotConnectedBot> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlConnectedBotConnectedBot::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'bot_id' => 1002,
            'recipients' => (string) new \Symfony\Component\Uid\UuidV7(),
            'rights' => (string) new \Symfony\Component\Uid\UuidV7(),
            'device' => 'device-5',
            'date' => 6,
            'location' => 'location-7',
        ];
    }
}
