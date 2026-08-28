<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for user of User.
 */
final class UserData extends TlUserAbstractData
{
    public function __construct(
    public int $flags,
    public bool $self,
    public bool $contact,
    public bool $mutualContact,
    public bool $deleted,
    public bool $bot,
    public bool $botChatHistory,
    public bool $botNochats,
    public bool $verified,
    public bool $restricted,
    public bool $min,
    public bool $botInlineGeo,
    public bool $support,
    public bool $scam,
    public bool $applyMinPhoto,
    public bool $fake,
    public bool $botAttachMenu,
    public bool $premium,
    public bool $attachMenuEnabled,
    public int $flags2,
    public bool $botCanEdit,
    public bool $closeFriend,
    public bool $storiesHidden,
    public bool $storiesUnavailable,
    public bool $contactRequirePremium,
    public bool $botBusiness,
    public bool $botHasMainApp,
    public bool $botForumView,
    public bool $botForumCanManageTopics,
    public bool $botCanManageBots,
    public bool $botGuestchat,
    public bool $botGuard,
    public int $id,
    public int $accessHash,
    public string $firstName,
    public string $lastName,
    public string $username,
    public string $phone,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUserProfilePhotoAbstractData $photo,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlUserStatusAbstractData $status,
    public int $botInfoVersion,
    public ?array $restrictionReason,
    public string $botInlinePlaceholder,
    public string $langCode,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlEmojiStatusAbstractData $emojiStatus,
    public ?array $usernames,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRecentStoryAbstractData $storiesMaxId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerColorAbstractData $color,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerColorAbstractData $profileColor,
    public int $botActiveUsers,
    public int $botVerificationIcon,
    public int $sendPaidMessagesStars,
    ) {
    }
}
