<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAuthSentCodeTypeSentCodeTypeSetUpEmailRequired (auth.sentCodeTypeSetUpEmailRequired). */
final class TlAuthSentCodeTypeSentCodeTypeSetUpEmailRequiredFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthSentCodeTypeSentCodeTypeSetUpEmailRequired> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAuthSentCodeTypeSentCodeTypeSetUpEmailRequired::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'apple_signin_allowed' => true,
            'google_signin_allowed' => true,
        ];
    }
}
