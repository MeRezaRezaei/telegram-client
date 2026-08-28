<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputInvoiceInputInvoiceBusinessBotTransferStars (inputInvoiceBusinessBotTransferStars). */
final class TlInputInvoiceInputInvoiceBusinessBotTransferStarsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceBusinessBotTransferStars> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceBusinessBotTransferStars::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'bot' => (string) new \Symfony\Component\Uid\UuidV7(),
            'stars' => 1002,
        ];
    }
}
