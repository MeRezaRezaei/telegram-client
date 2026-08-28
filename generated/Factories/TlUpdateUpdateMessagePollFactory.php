<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateMessagePoll (updateMessagePoll). */
final class TlUpdateUpdateMessagePollFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateMessagePoll> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateMessagePoll::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'msg_id' => 3,
            'top_msg_id' => 4,
            'poll_id' => 1005,
            'poll' => (string) new \Symfony\Component\Uid\UuidV7(),
            'results' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
