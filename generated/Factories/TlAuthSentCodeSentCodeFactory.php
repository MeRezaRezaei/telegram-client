<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuthSentCodeSentCode (auth.sentCode). */
final class TlAuthSentCodeSentCodeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthSentCodeSentCode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthSentCodeSentCode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'tl_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'phone_code_hash' => 'phone_code_hash-3',
            'next_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'timeout' => 5,
        ];
    }
}
