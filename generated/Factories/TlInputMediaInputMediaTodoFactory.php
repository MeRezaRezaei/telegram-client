<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputMediaInputMediaTodo (inputMediaTodo). */
final class TlInputMediaInputMediaTodoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaTodo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaTodo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'todo' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
