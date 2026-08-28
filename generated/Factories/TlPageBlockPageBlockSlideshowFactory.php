<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPageBlockPageBlockSlideshow (pageBlockSlideshow). */
final class TlPageBlockPageBlockSlideshowFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockSlideshow> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPageBlockPageBlockSlideshow::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'caption' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
