<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlPaymentsCheckCanSendGiftResultCheckCanSendGiftResultFail (payments.checkCanSendGiftResultFail). */
final class TlPaymentsCheckCanSendGiftResultCheckCanSendGiftResultFailFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsCheckCanSendGiftResultCheckCanSendGiftResultFail> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsCheckCanSendGiftResultCheckCanSendGiftResultFail::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'reason' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
