<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotInlineMessageBotInlineMessageMediaGeo (botInlineMessageMediaGeo). */
final class TlBotInlineMessageBotInlineMessageMediaGeoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotInlineMessageBotInlineMessageMediaGeo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotInlineMessageBotInlineMessageMediaGeo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'geo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'heading' => 3,
            'period' => 4,
            'proximity_notification_radius' => 5,
            'reply_markup' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
