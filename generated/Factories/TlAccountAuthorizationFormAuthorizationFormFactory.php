<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAccountAuthorizationFormAuthorizationForm (account.authorizationForm). */
final class TlAccountAuthorizationFormAuthorizationFormFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAuthorizationFormAuthorizationForm> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountAuthorizationFormAuthorizationForm::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'privacy_policy_url' => 'privacy_policy_url-2',
        ];
    }
}
