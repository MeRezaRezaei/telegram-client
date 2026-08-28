<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateGroupCallEncryptedMessage (updateGroupCallEncryptedMessage). */
final class TlUpdateUpdateGroupCallEncryptedMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateGroupCallEncryptedMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateGroupCallEncryptedMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'call' => (string) new \Symfony\Component\Uid\UuidV7(),
            'from_id' => (string) new \Symfony\Component\Uid\UuidV7(),
            'encrypted_message' => 'Ynl0ZXMtMw==',
        ];
    }
}
