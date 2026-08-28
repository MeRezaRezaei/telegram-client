<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPendingSuggestionPendingSuggestion (pendingSuggestion). */
final class TlPendingSuggestionPendingSuggestionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPendingSuggestionPendingSuggestion> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPendingSuggestionPendingSuggestion::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'suggestion' => 'suggestion-1',
            'title' => (string) new \Symfony\Component\Uid\UuidV7(),
            'description' => (string) new \Symfony\Component\Uid\UuidV7(),
            'url' => 'url-4',
        ];
    }
}
