<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateStarsBalance (updateStarsBalance). */
final class TlUpdateUpdateStarsBalanceFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateStarsBalance> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateStarsBalance::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'balance' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
