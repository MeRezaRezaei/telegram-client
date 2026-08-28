<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChannelAdminLogEventActionChannelAdminLogEventActionCreateTopic (channelAdminLogEventActionCreateTopic). */
final class TlChannelAdminLogEventActionChannelAdminLogEventActionCreateTopicFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionCreateTopic> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelAdminLogEventActionChannelAdminLogEventActionCreateTopic::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'topic' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
