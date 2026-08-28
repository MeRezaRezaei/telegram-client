<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlKeyboardButtonKeyboardButtonRequestPeer (keyboardButtonRequestPeer). */
final class TlKeyboardButtonKeyboardButtonRequestPeerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonKeyboardButtonRequestPeer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonKeyboardButtonRequestPeer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'style' => (string) new \Symfony\Component\Uid\UuidV7(),
            'text' => 'text-3',
            'button_id' => 4,
            'peer_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'max_quantity' => 6,
        ];
    }
}
