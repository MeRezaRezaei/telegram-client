<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagePeerVoteMessagePeerVoteMultiple (messagePeerVoteMultiple). */
final class TlMessagePeerVoteMessagePeerVoteMultipleFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagePeerVoteMessagePeerVoteMultiple> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagePeerVoteMessagePeerVoteMultiple::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'date' => 2,
        ];
    }
}
