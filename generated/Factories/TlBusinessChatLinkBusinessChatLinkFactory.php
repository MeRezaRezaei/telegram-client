<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBusinessChatLinkBusinessChatLink (businessChatLink). */
final class TlBusinessChatLinkBusinessChatLinkFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessChatLinkBusinessChatLink> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessChatLinkBusinessChatLink::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'link' => 'link-2',
            'message' => 'message-3',
            'title' => 'title-4',
            'views' => 5,
        ];
    }
}
