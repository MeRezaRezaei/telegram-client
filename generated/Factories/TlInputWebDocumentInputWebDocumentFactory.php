<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputWebDocumentInputWebDocument (inputWebDocument). */
final class TlInputWebDocumentInputWebDocumentFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputWebDocumentInputWebDocument> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputWebDocumentInputWebDocument::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'url' => 'url-1',
            'tl_size' => 2,
            'mime_type' => 'mime_type-3',
        ];
    }
}
