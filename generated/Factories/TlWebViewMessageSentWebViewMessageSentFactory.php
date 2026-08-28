<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlWebViewMessageSentWebViewMessageSent (webViewMessageSent). */
final class TlWebViewMessageSentWebViewMessageSentFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebViewMessageSentWebViewMessageSent> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebViewMessageSentWebViewMessageSent::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'msg_id' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
