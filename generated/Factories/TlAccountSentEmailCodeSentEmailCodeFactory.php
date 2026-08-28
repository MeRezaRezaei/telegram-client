<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAccountSentEmailCodeSentEmailCode (account.sentEmailCode). */
final class TlAccountSentEmailCodeSentEmailCodeFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountSentEmailCodeSentEmailCode> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountSentEmailCodeSentEmailCode::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'email_pattern' => 'email_pattern-1',
            'length' => 2,
        ];
    }
}
