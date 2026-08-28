<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputPeerInputPeerUserFromMessage (inputPeerUserFromMessage). */
final class TlInputPeerInputPeerUserFromMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPeerInputPeerUserFromMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPeerInputPeerUserFromMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'msg_id' => 2,
            'user_id' => 1003,
        ];
    }
}
