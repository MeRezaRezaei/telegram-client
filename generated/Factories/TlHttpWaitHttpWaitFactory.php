<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHttpWaitHttpWait (http_wait). */
final class TlHttpWaitHttpWaitFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHttpWaitHttpWait> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHttpWaitHttpWait::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'max_delay' => 1,
            'wait_after' => 2,
            'max_wait' => 3,
        ];
    }
}
