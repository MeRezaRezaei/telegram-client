<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlAiComposeToneExampleAiComposeToneExample (aiComposeToneExample). */
final class TlAiComposeToneExampleAiComposeToneExampleFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAiComposeToneExampleAiComposeToneExample> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAiComposeToneExampleAiComposeToneExample::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_from' => (string) new \Symfony\Component\Uid\UuidV7(),
            'tl_to' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
