<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdatesChannelDifferenceChannelDifferenceTooLong (updates.channelDifferenceTooLong). */
final class TlUpdatesChannelDifferenceChannelDifferenceTooLongFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesChannelDifferenceChannelDifferenceTooLong> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesChannelDifferenceChannelDifferenceTooLong::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'final' => true,
            'timeout' => 3,
            'dialog' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
