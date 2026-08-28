<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesMessagesChannelMessages (messages.channelMessages). */
final class TlMessagesMessagesChannelMessagesFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesChannelMessages> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesChannelMessages::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'inexact' => true,
            'pts' => 3,
            'count' => 4,
            'offset_id_offset' => 5,
        ];
    }
}
