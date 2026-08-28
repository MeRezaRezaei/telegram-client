<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlEncryptedFileEncryptedFile (encryptedFile). */
final class TlEncryptedFileEncryptedFileFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEncryptedFileEncryptedFile> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlEncryptedFileEncryptedFile::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'tl_id' => 1001,
            'access_hash' => 1002,
            'tl_size' => 1003,
            'dc_id' => 4,
            'key_fingerprint' => 5,
        ];
    }
}
