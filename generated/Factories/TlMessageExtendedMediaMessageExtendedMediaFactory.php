<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageExtendedMediaMessageExtendedMedia (messageExtendedMedia). */
final class TlMessageExtendedMediaMessageExtendedMediaFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageExtendedMediaMessageExtendedMedia> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageExtendedMediaMessageExtendedMedia::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'media' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
