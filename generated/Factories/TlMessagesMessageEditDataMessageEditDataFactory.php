<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesMessageEditDataMessageEditData (messages.messageEditData). */
final class TlMessagesMessageEditDataMessageEditDataFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessageEditDataMessageEditData> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesMessageEditDataMessageEditData::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'caption' => true,
        ];
    }
}
