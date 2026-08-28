<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuthAuthorizationAuthorizationSignUpRequired (auth.authorizationSignUpRequired). */
final class TlAuthAuthorizationAuthorizationSignUpRequiredFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthAuthorizationAuthorizationSignUpRequired> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthAuthorizationAuthorizationSignUpRequired::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'terms_of_service' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
