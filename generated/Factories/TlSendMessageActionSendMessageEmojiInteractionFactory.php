<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSendMessageActionSendMessageEmojiInteraction (sendMessageEmojiInteraction). */
final class TlSendMessageActionSendMessageEmojiInteractionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSendMessageActionSendMessageEmojiInteraction> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSendMessageActionSendMessageEmojiInteraction::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'emoticon' => 'emoticon-1',
            'msg_id' => 2,
            'interaction' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
