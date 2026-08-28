<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateReadHistoryInbox (updateReadHistoryInbox). */
final class TlUpdateUpdateReadHistoryInboxFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateReadHistoryInbox> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateReadHistoryInbox::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'folder_id' => 2,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'top_msg_id' => 4,
            'max_id' => 5,
            'still_unread_count' => 6,
            'pts' => 7,
            'pts_count' => 8,
        ];
    }
}
