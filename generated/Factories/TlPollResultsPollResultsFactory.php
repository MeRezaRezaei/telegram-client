<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPollResultsPollResults (pollResults). */
final class TlPollResultsPollResultsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPollResultsPollResults> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPollResultsPollResults::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'min' => true,
            'has_unread_votes' => true,
            'can_view_stats' => true,
            'total_voters' => 5,
            'solution' => 'solution-6',
            'solution_media' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
