<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputBotInlineMessageInputBotInlineMessageText (inputBotInlineMessageText). */
final class TlInputBotInlineMessageInputBotInlineMessageTextFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputBotInlineMessageInputBotInlineMessageText> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputBotInlineMessageInputBotInlineMessageText::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'no_webpage' => true,
            'invert_media' => true,
            'message' => 'message-4',
            'reply_markup' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
