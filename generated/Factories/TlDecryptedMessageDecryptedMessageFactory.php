<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDecryptedMessageDecryptedMessage (decryptedMessage). */
final class TlDecryptedMessageDecryptedMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageDecryptedMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageDecryptedMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'no_webpage' => true,
            'silent' => true,
            'random_id' => 1004,
            'ttl' => 5,
            'message' => 'message-6',
            'media' => (string) new \Symfony\Component\Uid\UuidV7(),
            'via_bot_name' => 'via_bot_name-8',
            'reply_to_random_id' => 1009,
            'grouped_id' => 1010,
        ];
    }
}
