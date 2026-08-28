<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlMessagesWebPagePreviewWebPagePreview (messages.webPagePreview). */
final class TlMessagesWebPagePreviewWebPagePreviewFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesWebPagePreviewWebPagePreview> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesWebPagePreviewWebPagePreview::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'media' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
