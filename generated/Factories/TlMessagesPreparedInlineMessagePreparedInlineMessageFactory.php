<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesPreparedInlineMessagePreparedInlineMessage (messages.preparedInlineMessage). */
final class TlMessagesPreparedInlineMessagePreparedInlineMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPreparedInlineMessagePreparedInlineMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPreparedInlineMessagePreparedInlineMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'query_id' => 1001,
            'result' => (string) new \Symfony\Component\Uid\UuidV7(),
            'cache_time' => 3,
        ];
    }
}
