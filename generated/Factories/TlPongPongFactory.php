<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPongPong (pong). */
final class TlPongPongFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPongPong> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPongPong::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'msg_id' => 1001,
            'ping_id' => 1002,
        ];
    }
}
