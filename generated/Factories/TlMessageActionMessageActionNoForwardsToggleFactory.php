<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionNoForwardsToggle (messageActionNoForwardsToggle). */
final class TlMessageActionMessageActionNoForwardsToggleFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionNoForwardsToggle> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionNoForwardsToggle::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'prev_value' => (string) new \Symfony\Component\Uid\UuidV7(),
            'new_value' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
