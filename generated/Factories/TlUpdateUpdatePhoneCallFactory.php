<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdatePhoneCall (updatePhoneCall). */
final class TlUpdateUpdatePhoneCallFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePhoneCall> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePhoneCall::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'phone_call' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
