<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputContactInputPhoneContact (inputPhoneContact). */
final class TlInputContactInputPhoneContactFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputContactInputPhoneContact> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputContactInputPhoneContact::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'client_id' => 1002,
            'phone' => 'phone-3',
            'first_name' => 'first_name-4',
            'last_name' => 'last_name-5',
            'note' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
