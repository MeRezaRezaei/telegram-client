<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlKeyboardButtonKeyboardButtonSwitchInline (keyboardButtonSwitchInline). */
final class TlKeyboardButtonKeyboardButtonSwitchInlineFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonKeyboardButtonSwitchInline> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonKeyboardButtonSwitchInline::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'same_peer' => true,
            'style' => (string) new \Symfony\Component\Uid\UuidV7(),
            'text' => 'text-4',
            'query' => 'query-5',
        ];
    }
}
