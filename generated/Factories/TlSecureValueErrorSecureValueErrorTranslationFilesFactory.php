<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSecureValueErrorSecureValueErrorTranslationFiles (secureValueErrorTranslationFiles). */
final class TlSecureValueErrorSecureValueErrorTranslationFilesFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureValueErrorSecureValueErrorTranslationFiles> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSecureValueErrorSecureValueErrorTranslationFiles::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'text' => 'text-2',
        ];
    }
}
