<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesAffectedHistoryAffectedHistory (messages.affectedHistory). */
final class TlMessagesAffectedHistoryAffectedHistoryFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesAffectedHistoryAffectedHistory> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesAffectedHistoryAffectedHistory::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'pts' => 1,
            'pts_count' => 2,
            'tl_offset' => 3,
        ];
    }
}
