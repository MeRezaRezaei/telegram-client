<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlInputFolderPeerInputFolderPeer (inputFolderPeer). */
final class TlInputFolderPeerInputFolderPeerFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputFolderPeerInputFolderPeer> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputFolderPeerInputFolderPeer::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'folder_id' => 2,
        ];
    }
}
