<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPhoneGroupCallGroupCall (phone.groupCall). */
final class TlPhoneGroupCallGroupCallFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneGroupCallGroupCall> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneGroupCallGroupCall::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'call' => (string) new \Symfony\Component\Uid\UuidV7(),
            'participants_next_offset' => 'participants_next_offset-2',
        ];
    }
}
