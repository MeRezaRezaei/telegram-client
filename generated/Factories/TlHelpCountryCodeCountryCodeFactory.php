<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlHelpCountryCodeCountryCode (help.countryCode). */
final class TlHelpCountryCodeCountryCodeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpCountryCodeCountryCode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpCountryCodeCountryCode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'country_code' => 'country_code-2',
        ];
    }
}
