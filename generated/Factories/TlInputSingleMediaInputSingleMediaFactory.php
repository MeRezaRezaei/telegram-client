<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputSingleMediaInputSingleMedia (inputSingleMedia). */
final class TlInputSingleMediaInputSingleMediaFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputSingleMediaInputSingleMedia> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputSingleMediaInputSingleMedia::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'media' => (string) new \Symfony\Component\Uid\UuidV7(),
            'random_id' => 1003,
            'message' => 'message-4',
        ];
    }
}
