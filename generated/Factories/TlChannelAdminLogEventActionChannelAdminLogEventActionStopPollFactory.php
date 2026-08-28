<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionStopPoll (channelAdminLogEventActionStopPoll). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionStopPollFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionStopPoll> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionStopPoll::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'message' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
