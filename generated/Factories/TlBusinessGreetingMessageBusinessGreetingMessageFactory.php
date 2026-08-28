<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBusinessGreetingMessageBusinessGreetingMessage (businessGreetingMessage). */
final class TlBusinessGreetingMessageBusinessGreetingMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessGreetingMessageBusinessGreetingMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessGreetingMessageBusinessGreetingMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'shortcut_id' => 1,
            'recipients' => (string) new \Symfony\Component\Uid\UuidV7(),
            'no_activity_days' => 3,
        ];
    }
}
