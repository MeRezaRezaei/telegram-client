<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRichTextTextDate (textDate). */
final class TlRichTextTextDateFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichTextTextDate> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichTextTextDate::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'relative' => true,
            'short_time' => true,
            'long_time' => true,
            'short_date' => true,
            'long_date' => true,
            'day_of_week' => true,
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
            'date' => 9,
        ];
    }
}
