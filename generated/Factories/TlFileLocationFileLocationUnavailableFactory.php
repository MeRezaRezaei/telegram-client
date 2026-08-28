<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlFileLocationFileLocationUnavailable (fileLocationUnavailable). */
final class TlFileLocationFileLocationUnavailableFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFileLocationFileLocationUnavailable> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFileLocationFileLocationUnavailable::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'volume_id' => 1001,
            'local_id' => 2,
            'secret' => 1003,
        ];
    }
}
