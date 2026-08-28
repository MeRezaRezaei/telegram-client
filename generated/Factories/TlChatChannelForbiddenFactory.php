<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatChannelForbidden (channelForbidden). */
final class TlChatChannelForbiddenFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatChannelForbidden> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatChannelForbidden::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'broadcast' => true,
            'megagroup' => true,
            'monoforum' => true,
            'tl_id' => 1005,
            'access_hash' => 1006,
            'title' => 'title-7',
            'until_date' => 8,
        ];
    }
}
