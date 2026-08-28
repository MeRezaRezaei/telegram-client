<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionPollDeleteAnswer (messageActionPollDeleteAnswer). */
final class TlMessageActionMessageActionPollDeleteAnswerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPollDeleteAnswer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionPollDeleteAnswer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'answer' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
