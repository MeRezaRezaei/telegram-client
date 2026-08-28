<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlNewSessionNewSessionCreated (new_session_created). */
final class TlNewSessionNewSessionCreatedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlNewSessionNewSessionCreated> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlNewSessionNewSessionCreated::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'first_msg_id' => 1001,
            'unique_id' => 1002,
            'server_salt' => 1003,
        ];
    }
}
