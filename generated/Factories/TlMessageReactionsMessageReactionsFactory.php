<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageReactionsMessageReactions (messageReactions). */
final class TlMessageReactionsMessageReactionsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageReactionsMessageReactions> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageReactionsMessageReactions::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'min' => true,
            'can_see_list' => true,
            'reactions_as_tags' => true,
        ];
    }
}
