<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputRichFileInputRichFilePhoto (inputRichFilePhoto). */
final class TlInputRichFileInputRichFilePhotoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichFileInputRichFilePhoto> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichFileInputRichFilePhoto::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 'id-1',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
