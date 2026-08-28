<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesBotPreparedInlineMessageBotPreparedInlineMessage (messages.botPreparedInlineMessage). */
final class TlMessagesBotPreparedInlineMessageBotPreparedInlineMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesBotPreparedInlineMessageBotPreparedInlineMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesBotPreparedInlineMessageBotPreparedInlineMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 'id-1',
            'expire_date' => 2,
        ];
    }
}
