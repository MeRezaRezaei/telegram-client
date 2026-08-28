<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateGroupCall (updateGroupCall). */
final class TlUpdateUpdateGroupCallFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateGroupCall> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateGroupCall::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'live_story' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'call' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
