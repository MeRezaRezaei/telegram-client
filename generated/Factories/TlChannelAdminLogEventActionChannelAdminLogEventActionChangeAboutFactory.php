<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionChangeAbout (channelAdminLogEventActionChangeAbout). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionChangeAboutFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionChangeAbout> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionChangeAbout::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'prev_value' => 'prev_value-1',
            'new_value' => 'new_value-2',
        ];
    }
}
