<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlBotInlineMessageBotInlineMessageMediaContact (botInlineMessageMediaContact). */
final class TlBotInlineMessageBotInlineMessageMediaContactFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotInlineMessageBotInlineMessageMediaContact> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBotInlineMessageBotInlineMessageMediaContact::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'phone_number' => 'phone_number-2',
            'first_name' => 'first_name-3',
            'last_name' => 'last_name-4',
            'vcard' => 'vcard-5',
            'reply_markup' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
