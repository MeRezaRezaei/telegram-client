<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputChatPhotoInputChatUploadedPhoto (inputChatUploadedPhoto). */
final class TlInputChatPhotoInputChatUploadedPhotoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputChatPhotoInputChatUploadedPhoto> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputChatPhotoInputChatUploadedPhoto::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'file' => (string) new \Symfony\Component\Uid\UuidV7(),
            'video' => (string) new \Symfony\Component\Uid\UuidV7(),
            'video_start_ts' => 0.4,
            'video_emoji_markup' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
