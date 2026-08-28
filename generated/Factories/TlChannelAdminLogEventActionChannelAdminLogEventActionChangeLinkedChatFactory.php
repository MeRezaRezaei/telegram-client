<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionChangeLinkedChat (channelAdminLogEventActionChangeLinkedChat). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionChangeLinkedChatFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionChangeLinkedChat> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionChangeLinkedChat::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'prev_value' => 1001,
            'new_value' => 1002,
        ];
    }
}
