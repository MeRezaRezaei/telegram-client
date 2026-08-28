<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotPreviewMediaBotPreviewMedia (botPreviewMedia). */
final class TlBotPreviewMediaBotPreviewMediaFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotPreviewMediaBotPreviewMedia> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotPreviewMediaBotPreviewMedia::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'date' => 1,
            'media' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
