<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputMediaInputMediaPhotoExternal (inputMediaPhotoExternal). */
final class TlInputMediaInputMediaPhotoExternalFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaPhotoExternal> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaPhotoExternal::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'spoiler' => true,
            'url' => 'url-3',
            'ttl_seconds' => 4,
        ];
    }
}
