<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageActionMessageActionBotAllowed (messageActionBotAllowed). */
final class TlMessageActionMessageActionBotAllowedFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionBotAllowed> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionBotAllowed::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'attach_menu' => true,
            'from_request' => true,
            'domain' => 'domain-4',
            'app' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
