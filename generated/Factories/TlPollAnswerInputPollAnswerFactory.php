<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPollAnswerInputPollAnswer (inputPollAnswer). */
final class TlPollAnswerInputPollAnswerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPollAnswerInputPollAnswer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPollAnswerInputPollAnswer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
            'media' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
