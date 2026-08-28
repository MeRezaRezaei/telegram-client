<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputReplyToInputReplyToMonoForum (inputReplyToMonoForum). */
final class TlInputReplyToInputReplyToMonoForumFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputReplyToInputReplyToMonoForum> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputReplyToInputReplyToMonoForum::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'monoforum_peer_id' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
