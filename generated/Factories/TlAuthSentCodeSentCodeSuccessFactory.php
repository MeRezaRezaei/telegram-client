<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuthSentCodeSentCodeSuccess (auth.sentCodeSuccess). */
final class TlAuthSentCodeSentCodeSuccessFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthSentCodeSentCodeSuccess> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthSentCodeSentCodeSuccess::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_authorization' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
