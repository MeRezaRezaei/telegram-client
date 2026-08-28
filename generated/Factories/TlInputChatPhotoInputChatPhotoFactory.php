<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputChatPhotoInputChatPhoto (inputChatPhoto). */
final class TlInputChatPhotoInputChatPhotoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputChatPhotoInputChatPhoto> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputChatPhotoInputChatPhoto::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
