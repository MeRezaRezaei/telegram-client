<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesMessagesMessagesSlice (messages.messagesSlice). */
final class TlMessagesMessagesMessagesSliceFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesSlice> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessagesMessagesSlice::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'inexact' => true,
            'count' => 3,
            'next_rate' => 4,
            'offset_id_offset' => 5,
            'search_flood' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
