<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMediaMessageMediaToDo (messageMediaToDo). */
final class TlMessageMediaMessageMediaToDoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaToDo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaToDo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'todo' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
