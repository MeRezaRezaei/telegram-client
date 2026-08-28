<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionStarGiftPurchaseOfferDeclined (messageActionStarGiftPurchaseOfferDeclined). */
final class TlMessageActionMessageActionStarGiftPurchaseOfferDeclinedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionStarGiftPurchaseOfferDeclined> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionStarGiftPurchaseOfferDeclined::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'expired' => true,
            'gift' => (string) new \Symfony\Component\Uid\UuidV7(),
            'price' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
