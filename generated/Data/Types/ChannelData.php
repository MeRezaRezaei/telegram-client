<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channel of Chat.
 */
final class ChannelData extends TlChatAbstractData
{
    public function __construct(
    public int $flags,
    public bool $creator,
    public bool $left,
    public bool $broadcast,
    public bool $verified,
    public bool $megagroup,
    public bool $restricted,
    public bool $signatures,
    public bool $min,
    public bool $scam,
    public bool $hasLink,
    public bool $hasGeo,
    public bool $slowmodeEnabled,
    public bool $callActive,
    public bool $callNotEmpty,
    public bool $fake,
    public bool $gigagroup,
    public bool $noforwards,
    public bool $joinToSend,
    public bool $joinRequest,
    public bool $forum,
    public int $flags2,
    public bool $storiesHidden,
    public bool $storiesHiddenMin,
    public bool $storiesUnavailable,
    public bool $signatureProfiles,
    public bool $autotranslation,
    public bool $broadcastMessagesAllowed,
    public bool $monoforum,
    public bool $forumTabs,
    public int $id,
    public int $accessHash,
    public string $title,
    public string $username,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatPhotoAbstractData $photo,
    public int $date,
    public ?array $restrictionReason,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $adminRights,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatBannedRightsAbstractData $bannedRights,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatBannedRightsAbstractData $defaultBannedRights,
    public int $participantsCount,
    public ?array $usernames,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRecentStoryAbstractData $storiesMaxId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerColorAbstractData $color,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerColorAbstractData $profileColor,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlEmojiStatusAbstractData $emojiStatus,
    public int $level,
    public int $subscriptionUntilDate,
    public int $botVerificationIcon,
    public int $sendPaidMessagesStars,
    public int $linkedMonoforumId,
    ) {
    }
}
