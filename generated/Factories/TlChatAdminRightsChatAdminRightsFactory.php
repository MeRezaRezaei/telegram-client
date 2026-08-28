<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/** Factory for TlChatAdminRightsChatAdminRights (chatAdminRights). */
final class TlChatAdminRightsChatAdminRightsFactory extends Factory
{
    /** @var class-string<\MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatAdminRightsChatAdminRights> */
    protected $model = \MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChatAdminRightsChatAdminRights::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'flags' => 1,
            'change_info' => true,
            'post_messages' => true,
            'edit_messages' => true,
            'delete_messages' => true,
            'ban_users' => true,
            'invite_users' => true,
            'pin_messages' => true,
            'add_admins' => true,
            'anonymous' => true,
            'manage_call' => true,
            'other' => true,
            'manage_topics' => true,
            'post_stories' => true,
            'edit_stories' => true,
            'delete_stories' => true,
            'manage_direct_messages' => true,
            'manage_ranks' => true,
        ];
    }
}
