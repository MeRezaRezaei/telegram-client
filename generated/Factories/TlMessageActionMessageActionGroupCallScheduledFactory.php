<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionGroupCallScheduled (messageActionGroupCallScheduled). */
final class TlMessageActionMessageActionGroupCallScheduledFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionGroupCallScheduled> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionGroupCallScheduled::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'call' => (string) new \Symfony\Component\Uid\UuidV7(),
            'schedule_date' => 2,
        ];
    }
}
