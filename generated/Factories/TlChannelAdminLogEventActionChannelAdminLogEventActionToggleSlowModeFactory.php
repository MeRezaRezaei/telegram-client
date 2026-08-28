<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionToggleSlowMode (channelAdminLogEventActionToggleSlowMode). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionToggleSlowModeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionToggleSlowMode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionToggleSlowMode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'prev_value' => 1,
            'new_value' => 2,
        ];
    }
}
