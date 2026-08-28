<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMediaAreaMediaAreaChannelPost (mediaAreaChannelPost). */
final class TlMediaAreaMediaAreaChannelPostFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaChannelPost> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMediaAreaMediaAreaChannelPost::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'coordinates' => (string) new \Symfony\Component\Uid\UuidV7(),
            'channel_id' => 1002,
            'msg_id' => 3,
        ];
    }
}
