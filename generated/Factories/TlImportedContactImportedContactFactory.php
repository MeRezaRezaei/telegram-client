<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlImportedContactImportedContact (importedContact). */
final class TlImportedContactImportedContactFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlImportedContactImportedContact> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlImportedContactImportedContact::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'user_id' => 1001,
            'client_id' => 1002,
        ];
    }
}
