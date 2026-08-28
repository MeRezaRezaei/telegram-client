<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageEntityMessageEntityMentionName (messageEntityMentionName). */
final class TlMessageEntityMessageEntityMentionNameFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityMentionName> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityMentionName::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_offset' => 1,
            'length' => 2,
            'user_id' => 1003,
        ];
    }
}
