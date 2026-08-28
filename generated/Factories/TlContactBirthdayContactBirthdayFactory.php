<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlContactBirthdayContactBirthday (contactBirthday). */
final class TlContactBirthdayContactBirthdayFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactBirthdayContactBirthday> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlContactBirthdayContactBirthday::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'contact_id' => 1001,
            'birthday' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
