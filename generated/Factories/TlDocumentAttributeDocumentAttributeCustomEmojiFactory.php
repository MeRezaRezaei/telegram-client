<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDocumentAttributeDocumentAttributeCustomEmoji (documentAttributeCustomEmoji). */
final class TlDocumentAttributeDocumentAttributeCustomEmojiFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDocumentAttributeDocumentAttributeCustomEmoji> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDocumentAttributeDocumentAttributeCustomEmoji::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'free' => true,
            'text_color' => true,
            'alt' => 'alt-4',
            'stickerset' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
