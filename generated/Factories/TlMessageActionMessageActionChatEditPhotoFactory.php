<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionChatEditPhoto (messageActionChatEditPhoto). */
final class TlMessageActionMessageActionChatEditPhotoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionChatEditPhoto> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionChatEditPhoto::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
