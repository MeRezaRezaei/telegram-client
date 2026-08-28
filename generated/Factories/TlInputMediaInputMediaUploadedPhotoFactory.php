<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputMediaInputMediaUploadedPhoto (inputMediaUploadedPhoto). */
final class TlInputMediaInputMediaUploadedPhotoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaUploadedPhoto> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaUploadedPhoto::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'spoiler' => true,
            'live_photo' => true,
            'file' => (string) new \Symfony\Component\Uid\UuidV7(),
            'ttl_seconds' => 5,
            'video' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
