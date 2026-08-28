<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateMonoForumNoPaidException (updateMonoForumNoPaidException). */
final class TlUpdateUpdateMonoForumNoPaidExceptionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateMonoForumNoPaidException> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateMonoForumNoPaidException::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'exception' => true,
            'channel_id' => 1003,
            'saved_peer_id' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
