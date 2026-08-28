<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlReplyMarkupReplyKeyboardMarkup (replyKeyboardMarkup). */
final class TlReplyMarkupReplyKeyboardMarkupFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlReplyMarkupReplyKeyboardMarkup> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlReplyMarkupReplyKeyboardMarkup::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'resize' => true,
            'single_use' => true,
            'selective' => true,
            'persistent' => true,
            'placeholder' => 'placeholder-6',
        ];
    }
}
