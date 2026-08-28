<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesMessageReactionsListMessageReactionsList (messages.messageReactionsList). */
final class TlMessagesMessageReactionsListMessageReactionsListFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessageReactionsListMessageReactionsList> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessageReactionsListMessageReactionsList::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'count' => 2,
            'next_offset' => 'next_offset-3',
        ];
    }
}
