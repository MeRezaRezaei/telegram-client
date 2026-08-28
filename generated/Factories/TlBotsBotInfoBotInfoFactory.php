<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotsBotInfoBotInfo (bots.botInfo). */
final class TlBotsBotInfoBotInfoFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsBotInfoBotInfo> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotsBotInfoBotInfo::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => 'name-1',
            'about' => 'about-2',
            'description' => 'description-3',
        ];
    }
}
