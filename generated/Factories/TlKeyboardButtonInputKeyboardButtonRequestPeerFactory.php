<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlKeyboardButtonInputKeyboardButtonRequestPeer (inputKeyboardButtonRequestPeer). */
final class TlKeyboardButtonInputKeyboardButtonRequestPeerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonInputKeyboardButtonRequestPeer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonInputKeyboardButtonRequestPeer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'name_requested' => true,
            'username_requested' => true,
            'photo_requested' => true,
            'style' => (string) new \Symfony\Component\Uid\UuidV7(),
            'text' => 'text-6',
            'button_id' => 7,
            'peer_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'max_quantity' => 9,
        ];
    }
}
