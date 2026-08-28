<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputInvoiceInputInvoiceStarGift (inputInvoiceStarGift). */
final class TlInputInvoiceInputInvoiceStarGiftFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceStarGift> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputInvoiceInputInvoiceStarGift::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'hide_name' => true,
            'include_upgrade' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'gift_id' => 1005,
            'message' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
