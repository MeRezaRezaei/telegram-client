<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlWebPageAttributeWebPageAttributeStarGiftAuction (webPageAttributeStarGiftAuction). */
final class TlWebPageAttributeWebPageAttributeStarGiftAuctionFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebPageAttributeWebPageAttributeStarGiftAuction> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlWebPageAttributeWebPageAttributeStarGiftAuction::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'gift' => (string) new \Symfony\Component\Uid\UuidV7(),
            'end_date' => 2,
        ];
    }
}
