<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuthPasswordRecoveryPasswordRecovery (auth.passwordRecovery). */
final class TlAuthPasswordRecoveryPasswordRecoveryFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthPasswordRecoveryPasswordRecovery> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthPasswordRecoveryPasswordRecovery::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'email_pattern' => 'email_pattern-1',
        ];
    }
}
