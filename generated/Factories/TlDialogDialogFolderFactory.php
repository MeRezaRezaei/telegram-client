<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlDialogDialogFolder (dialogFolder). */
final class TlDialogDialogFolderFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDialogDialogFolder> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlDialogDialogFolder::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'pinned' => true,
            'folder' => (string) new \Symfony\Component\Uid\UuidV7(),
            'peer' => (string) new \Symfony\Component\Uid\UuidV7(),
            'top_message' => 5,
            'unread_muted_peers_count' => 6,
            'unread_unmuted_peers_count' => 7,
            'unread_muted_messages_count' => 8,
            'unread_unmuted_messages_count' => 9,
        ];
    }
}
