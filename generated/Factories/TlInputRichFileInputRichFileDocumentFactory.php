<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputRichFileInputRichFileDocument (inputRichFileDocument). */
final class TlInputRichFileInputRichFileDocumentFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichFileInputRichFileDocument> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputRichFileInputRichFileDocument::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 'id-1',
            'document' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
