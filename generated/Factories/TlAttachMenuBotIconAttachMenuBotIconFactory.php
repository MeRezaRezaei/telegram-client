<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAttachMenuBotIconAttachMenuBotIcon (attachMenuBotIcon). */
final class TlAttachMenuBotIconAttachMenuBotIconFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAttachMenuBotIconAttachMenuBotIcon> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAttachMenuBotIconAttachMenuBotIcon::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'name' => 'name-2',
            'icon' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
