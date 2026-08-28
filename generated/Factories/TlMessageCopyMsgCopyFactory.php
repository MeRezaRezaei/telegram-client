<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageCopyMsgCopy (msg_copy). */
final class TlMessageCopyMsgCopyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageCopyMsgCopy> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageCopyMsgCopy::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'orig_message' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
