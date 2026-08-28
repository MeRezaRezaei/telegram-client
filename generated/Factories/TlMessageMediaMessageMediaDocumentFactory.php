<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageMediaMessageMediaDocument (messageMediaDocument). */
final class TlMessageMediaMessageMediaDocumentFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaDocument> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageMediaMessageMediaDocument::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'nopremium' => true,
            'spoiler' => true,
            'video' => true,
            'round' => true,
            'voice' => true,
            'document' => (string) new \Symfony\Component\Uid\UuidV7(),
            'video_cover' => (string) new \Symfony\Component\Uid\UuidV7(),
            'video_timestamp' => 9,
            'ttl_seconds' => 10,
        ];
    }
}
