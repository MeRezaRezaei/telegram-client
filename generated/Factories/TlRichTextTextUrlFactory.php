<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRichTextTextUrl (textUrl). */
final class TlRichTextTextUrlFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichTextTextUrl> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRichTextTextUrl::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'text' => (string) new \Symfony\Component\Uid\UuidV7(),
            'url' => 'url-2',
            'webpage_id' => 1003,
        ];
    }
}
