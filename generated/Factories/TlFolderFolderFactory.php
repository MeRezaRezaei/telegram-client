<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlFolderFolder (folder). */
final class TlFolderFolderFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFolderFolder> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlFolderFolder::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'autofill_new_broadcasts' => true,
            'autofill_public_groups' => true,
            'autofill_new_correspondents' => true,
            'tl_id' => 5,
            'title' => 'title-6',
            'photo' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
