<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotInlineMessageBotInlineMessageMediaAuto (botInlineMessageMediaAuto). */
final class TlBotInlineMessageBotInlineMessageMediaAutoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotInlineMessageBotInlineMessageMediaAuto> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotInlineMessageBotInlineMessageMediaAuto::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'invert_media' => true,
            'message' => 'message-3',
            'reply_markup' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
