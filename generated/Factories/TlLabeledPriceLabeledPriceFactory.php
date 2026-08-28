<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlLabeledPriceLabeledPrice (labeledPrice). */
final class TlLabeledPriceLabeledPriceFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlLabeledPriceLabeledPrice> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlLabeledPriceLabeledPrice::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'label' => 'label-1',
            'amount' => 1002,
        ];
    }
}
