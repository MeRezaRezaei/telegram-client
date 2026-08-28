<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMediaMessageMediaWebPage (messageMediaWebPage). */
final class TlMessageMediaMessageMediaWebPageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaWebPage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaWebPage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'force_large_media' => true,
            'force_small_media' => true,
            'manual' => true,
            'safe' => true,
            'webpage' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
