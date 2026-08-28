<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDecryptedMessageActionDecryptedMessageActionTyping (decryptedMessageActionTyping). */
final class TlDecryptedMessageActionDecryptedMessageActionTypingFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageActionDecryptedMessageActionTyping> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageActionDecryptedMessageActionTyping::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'action' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
