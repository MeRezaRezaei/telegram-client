<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputInvoiceInputInvoiceStars (inputInvoiceStars). */
final class TlInputInvoiceInputInvoiceStarsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceStars> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceStars::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'purpose' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
