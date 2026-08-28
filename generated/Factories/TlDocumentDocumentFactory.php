<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDocumentDocument (document). */
final class TlDocumentDocumentFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDocumentDocument> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDocumentDocument::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'tl_id' => 1002,
            'access_hash' => 1003,
            'file_reference' => 'Ynl0ZXMtNA==',
            'date' => 5,
            'mime_type' => 'mime_type-6',
            'tl_size' => 1007,
            'dc_id' => 8,
        ];
    }
}
