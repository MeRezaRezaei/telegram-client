<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlKeyboardButtonInputKeyboardButtonUrlAuth (inputKeyboardButtonUrlAuth). */
final class TlKeyboardButtonInputKeyboardButtonUrlAuthFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonInputKeyboardButtonUrlAuth> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonInputKeyboardButtonUrlAuth::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'request_write_access' => true,
            'style' => (string) new \Symfony\Component\Uid\UuidV7(),
            'text' => 'text-4',
            'fwd_text' => 'fwd_text-5',
            'url' => 'url-6',
            'bot' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
