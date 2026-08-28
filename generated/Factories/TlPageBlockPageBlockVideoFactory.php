<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageBlockPageBlockVideo (pageBlockVideo). */
final class TlPageBlockPageBlockVideoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockVideo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockVideo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'autoplay' => true,
            'loop' => true,
            'spoiler' => true,
            'video_id' => 1005,
            'caption' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
