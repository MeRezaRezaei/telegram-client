<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatAdminRights of ChatAdminRights.
 */
final class ChatAdminRightsData extends TlChatAdminRightsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $changeInfo,
    public bool $postMessages,
    public bool $editMessages,
    public bool $deleteMessages,
    public bool $banUsers,
    public bool $inviteUsers,
    public bool $pinMessages,
    public bool $addAdmins,
    public bool $anonymous,
    public bool $manageCall,
    public bool $other,
    public bool $manageTopics,
    public bool $postStories,
    public bool $editStories,
    public bool $deleteStories,
    public bool $manageDirectMessages,
    public bool $manageRanks,
    ) {
    }
}
