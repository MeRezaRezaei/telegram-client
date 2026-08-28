<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputBotInlineMessageInputBotInlineMessageMediaInvoice (inputBotInlineMessageMediaInvoice). */
final class TlInputBotInlineMessageInputBotInlineMessageMediaInvoiceFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputBotInlineMessageInputBotInlineMessageMediaInvoice> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputBotInlineMessageInputBotInlineMessageMediaInvoice::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'title' => 'title-2',
            'description' => 'description-3',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
            'invoice' => (string) new \Symfony\Component\Uid\UuidV7(),
            'payload' => 'Ynl0ZXMtNg==',
            'provider' => 'provider-7',
            'provider_data' => (string) new \Symfony\Component\Uid\UuidV7(),
            'reply_markup' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
