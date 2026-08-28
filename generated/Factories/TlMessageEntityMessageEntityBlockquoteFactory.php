<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessageEntityMessageEntityBlockquote (messageEntityBlockquote). */
final class TlMessageEntityMessageEntityBlockquoteFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityBlockquote> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageEntityMessageEntityBlockquote::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'collapsed' => true,
            'tl_offset' => 3,
            'length' => 4,
        ];
    }
}
