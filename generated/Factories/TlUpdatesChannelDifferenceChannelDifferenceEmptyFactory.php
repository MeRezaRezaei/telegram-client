<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdatesChannelDifferenceChannelDifferenceEmpty (updates.channelDifferenceEmpty). */
final class TlUpdatesChannelDifferenceChannelDifferenceEmptyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesChannelDifferenceChannelDifferenceEmpty> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesChannelDifferenceChannelDifferenceEmpty::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'final' => true,
            'pts' => 3,
            'timeout' => 4,
        ];
    }
}
