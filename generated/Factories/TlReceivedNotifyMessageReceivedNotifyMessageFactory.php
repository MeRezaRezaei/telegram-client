<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlReceivedNotifyMessageReceivedNotifyMessage (receivedNotifyMessage). */
final class TlReceivedNotifyMessageReceivedNotifyMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlReceivedNotifyMessageReceivedNotifyMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlReceivedNotifyMessageReceivedNotifyMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 1,
            'flags' => 2,
        ];
    }
}
