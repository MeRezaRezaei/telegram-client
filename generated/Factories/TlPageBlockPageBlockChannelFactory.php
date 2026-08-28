<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageBlockPageBlockChannel (pageBlockChannel). */
final class TlPageBlockPageBlockChannelFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockChannel> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockChannel::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'channel' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
