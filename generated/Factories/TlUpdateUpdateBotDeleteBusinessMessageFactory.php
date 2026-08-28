<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdateBotDeleteBusinessMessage (updateBotDeleteBusinessMessage). */
final class TlUpdateUpdateBotDeleteBusinessMessageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotDeleteBusinessMessage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotDeleteBusinessMessage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'connection_id' => 'connection_id-1',
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'qts' => 3,
        ];
    }
}
