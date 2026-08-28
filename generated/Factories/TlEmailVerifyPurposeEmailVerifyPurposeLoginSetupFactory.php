<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlEmailVerifyPurposeEmailVerifyPurposeLoginSetup (emailVerifyPurposeLoginSetup). */
final class TlEmailVerifyPurposeEmailVerifyPurposeLoginSetupFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEmailVerifyPurposeEmailVerifyPurposeLoginSetup> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEmailVerifyPurposeEmailVerifyPurposeLoginSetup::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'phone_number' => 'phone_number-1',
            'phone_code_hash' => 'phone_code_hash-2',
        ];
    }
}
