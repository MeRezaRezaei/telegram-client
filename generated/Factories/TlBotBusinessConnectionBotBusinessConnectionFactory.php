<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotBusinessConnectionBotBusinessConnection (botBusinessConnection). */
final class TlBotBusinessConnectionBotBusinessConnectionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotBusinessConnectionBotBusinessConnection> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotBusinessConnectionBotBusinessConnection::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'disabled' => true,
            'connection_id' => 'connection_id-3',
            'user_id' => 1004,
            'dc_id' => 5,
            'date' => 6,
            'rights' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
