<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlSendAsPeerSendAsPeer (sendAsPeer). */
final class TlSendAsPeerSendAsPeerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSendAsPeerSendAsPeer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSendAsPeerSendAsPeer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'premium_required' => true,
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
