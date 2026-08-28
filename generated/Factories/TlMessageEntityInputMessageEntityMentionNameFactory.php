<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageEntityInputMessageEntityMentionName (inputMessageEntityMentionName). */
final class TlMessageEntityInputMessageEntityMentionNameFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityInputMessageEntityMentionName> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityInputMessageEntityMentionName::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_offset' => 1,
            'length' => 2,
            'user_id' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
