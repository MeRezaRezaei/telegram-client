<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuthAuthorizationAuthorization (auth.authorization). */
final class TlAuthAuthorizationAuthorizationFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthAuthorizationAuthorization> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthAuthorizationAuthorization::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'setup_password_required' => true,
            'otherwise_relogin_days' => 3,
            'tmp_sessions' => 4,
            'future_auth_token' => 'Ynl0ZXMtNQ==',
            'tl_user' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
