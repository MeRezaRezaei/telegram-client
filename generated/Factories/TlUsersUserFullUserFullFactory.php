<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUsersUserFullUserFull (users.userFull). */
final class TlUsersUserFullUserFullFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUsersUserFullUserFull> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUsersUserFullUserFull::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'full_user' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
