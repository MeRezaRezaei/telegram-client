<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlUploadWebFileWebFile (upload.webFile). */
final class TlUploadWebFileWebFileFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUploadWebFileWebFile> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUploadWebFileWebFile::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_size' => 1,
            'mime_type' => 'mime_type-2',
            'file_type' => (string) new \Symfony\Component\Uid\UuidV7(),
            'mtime' => 4,
            'bytes' => 'Ynl0ZXMtNQ==',
        ];
    }
}
