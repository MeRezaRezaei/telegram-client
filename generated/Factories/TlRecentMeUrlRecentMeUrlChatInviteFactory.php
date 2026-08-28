<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlRecentMeUrlRecentMeUrlChatInvite (recentMeUrlChatInvite). */
final class TlRecentMeUrlRecentMeUrlChatInviteFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRecentMeUrlRecentMeUrlChatInvite> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlRecentMeUrlRecentMeUrlChatInvite::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'url' => 'url-1',
            'chat_invite' => (string) new \Symfony\Component\Uid\UuidV7(),
        ];
    }
}
