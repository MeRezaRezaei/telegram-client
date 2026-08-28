<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPostInteractionCountersPostInteractionCountersMessage (postInteractionCountersMessage). */
final class TlPostInteractionCountersPostInteractionCountersMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPostInteractionCountersPostInteractionCountersMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPostInteractionCountersPostInteractionCountersMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'msg_id' => 1,
            'views' => 2,
            'forwards' => 3,
            'reactions' => 4,
        ];
    }
}
