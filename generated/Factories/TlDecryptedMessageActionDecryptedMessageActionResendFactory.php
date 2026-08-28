<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDecryptedMessageActionDecryptedMessageActionResend (decryptedMessageActionResend). */
final class TlDecryptedMessageActionDecryptedMessageActionResendFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageActionDecryptedMessageActionResend> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDecryptedMessageActionDecryptedMessageActionResend::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'start_seq_no' => 1,
            'end_seq_no' => 2,
        ];
    }
}
