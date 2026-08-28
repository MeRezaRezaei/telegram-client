<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputMediaInputMediaUploadedDocument (inputMediaUploadedDocument). */
final class TlInputMediaInputMediaUploadedDocumentFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaUploadedDocument> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaUploadedDocument::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'nosound_video' => true,
            'force_file' => true,
            'spoiler' => true,
            'file' => (string) new \Symfony\Component\Uid\UuidV7(),
            'thumb' => (string) new \Symfony\Component\Uid\UuidV7(),
            'mime_type' => 'mime_type-7',
            'video_cover' => (string) new \Symfony\Component\Uid\UuidV7(),
            'video_timestamp' => 9,
            'ttl_seconds' => 10,
        ];
    }
}
