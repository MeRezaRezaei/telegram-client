<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSecureRequiredTypeSecureRequiredType (secureRequiredType). */
final class TlSecureRequiredTypeSecureRequiredTypeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureRequiredTypeSecureRequiredType> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureRequiredTypeSecureRequiredType::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'native_names' => true,
            'selfie_required' => true,
            'translation_required' => true,
            'tl_type' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
