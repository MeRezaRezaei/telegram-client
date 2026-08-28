<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateJoinChatWebViewDecision (updateJoinChatWebViewDecision). */
final class TlUpdateUpdateJoinChatWebViewDecisionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateJoinChatWebViewDecision> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateJoinChatWebViewDecision::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'query_id' => 1002,
            'result' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
