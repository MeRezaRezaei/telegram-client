<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMessageEmpty (messageEmpty). */
final class TlMessageMessageEmptyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMessageEmpty> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMessageEmpty::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'tl_id' => 2,
            'peer_id' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
