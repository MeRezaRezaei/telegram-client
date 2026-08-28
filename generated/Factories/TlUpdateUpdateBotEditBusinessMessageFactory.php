<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateBotEditBusinessMessage (updateBotEditBusinessMessage). */
final class TlUpdateUpdateBotEditBusinessMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotEditBusinessMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotEditBusinessMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'connection_id' => 'connection_id-2',
            'message' => (string) new \Symfony\Component\Uid\UuidV7(),
            'reply_to_message' => (string) new \Symfony\Component\Uid\UuidV7(),
            'qts' => 5,
        ];
    }
}
