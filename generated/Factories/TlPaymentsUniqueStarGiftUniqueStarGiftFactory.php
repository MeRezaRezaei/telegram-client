<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsUniqueStarGiftUniqueStarGift (payments.uniqueStarGift). */
final class TlPaymentsUniqueStarGiftUniqueStarGiftFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsUniqueStarGiftUniqueStarGift> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsUniqueStarGiftUniqueStarGift::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'gift' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
