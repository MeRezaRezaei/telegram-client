<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlQuickReplyQuickReply (quickReply). */
final class TlQuickReplyQuickReplyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlQuickReplyQuickReply> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlQuickReplyQuickReply::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'shortcut_id' => 1,
            'shortcut' => 'shortcut-2',
            'top_message' => 3,
            'count' => 4,
        ];
    }
}
