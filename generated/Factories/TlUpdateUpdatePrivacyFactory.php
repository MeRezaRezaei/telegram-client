<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUpdateUpdatePrivacy (updatePrivacy). */
final class TlUpdateUpdatePrivacyFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePrivacy> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdatePrivacy::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_key' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
