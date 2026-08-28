<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatlistsExportedChatlistInviteExportedChatlistInvite (chatlists.exportedChatlistInvite). */
final class TlChatlistsExportedChatlistInviteExportedChatlistInviteFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatlistsExportedChatlistInviteExportedChatlistInvite> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatlistsExportedChatlistInviteExportedChatlistInvite::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'filter' => (string) new \Symfony\Component\Uid\UuidV7(),
            'invite' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
