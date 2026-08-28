<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatPhotoChatPhoto (chatPhoto). */
final class TlChatPhotoChatPhotoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatPhotoChatPhoto> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatPhotoChatPhoto::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'has_video' => true,
            'photo_id' => 1003,
            'stripped_thumb' => 'Ynl0ZXMtNA==',
            'dc_id' => 5,
        ];
    }
}
