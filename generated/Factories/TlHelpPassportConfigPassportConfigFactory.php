<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHelpPassportConfigPassportConfig (help.passportConfig). */
final class TlHelpPassportConfigPassportConfigFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPassportConfigPassportConfig> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPassportConfigPassportConfig::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'hash' => 1,
            'countries_langs' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
