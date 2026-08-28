<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotCommandBotCommand (botCommand). */
final class TlBotCommandBotCommandFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotCommandBotCommand> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotCommandBotCommand::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'command' => 'command-1',
            'description' => 'description-2',
        ];
    }
}
