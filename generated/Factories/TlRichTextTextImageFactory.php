<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRichTextTextImage (textImage). */
final class TlRichTextTextImageFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichTextTextImage> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichTextTextImage::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'document_id' => 1001,
            'w' => 2,
            'h' => 3,
        ];
    }
}
