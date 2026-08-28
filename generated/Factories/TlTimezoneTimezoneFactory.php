<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlTimezoneTimezone (timezone). */
final class TlTimezoneTimezoneFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlTimezoneTimezone> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlTimezoneTimezone::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 'id-1',
            'name' => 'name-2',
            'utc_offset' => 3,
        ];
    }
}
