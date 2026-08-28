<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateBotWebhookJSON (updateBotWebhookJSON). */
final class TlUpdateUpdateBotWebhookJSONFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotWebhookJSON> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotWebhookJSON::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'data' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
