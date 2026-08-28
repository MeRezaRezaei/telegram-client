<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlFileLocationFileLocation (fileLocation). */
final class TlFileLocationFileLocationFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFileLocationFileLocation> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFileLocationFileLocation::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'dc_id' => 1,
            'volume_id' => 1002,
            'local_id' => 3,
            'secret' => 1004,
        ];
    }
}
