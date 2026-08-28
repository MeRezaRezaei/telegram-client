<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelFull of ChatFull.
 */
final class ChannelFullData extends TlChatFullAbstractData
{
    public function __construct(
    public int $flags,
    public bool $canViewParticipants,
    public bool $canSetUsername,
    public bool $canSetStickers,
    public bool $hiddenPrehistory,
    public bool $canSetLocation,
    public bool $hasScheduled,
    public bool $canViewStats,
    public bool $blocked,
    public int $flags2,
    public bool $canDeleteChannel,
    public bool $antispam,
    public bool $participantsHidden,
    public bool $translationsDisabled,
    public bool $storiesPinnedAvailable,
    public bool $viewForumAsMessages,
    public bool $restrictedSponsored,
    public bool $canViewRevenue,
    public bool $paidMediaAllowed,
    public bool $canViewStarsRevenue,
    public bool $paidReactionsAvailable,
    public bool $stargiftsAvailable,
    public bool $paidMessagesAvailable,
    public int $id,
    public string $about,
    public int $participantsCount,
    public int $adminsCount,
    public int $kickedCount,
    public int $bannedCount,
    public int $onlineCount,
    public int $readInboxMaxId,
    public int $readOutboxMaxId,
    public int $unreadCount,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $chatPhoto,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerNotifySettingsAbstractData $notifySettings,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatInviteAbstractData $exportedInvite,
    public array $botInfo,
    public int $migratedFromChatId,
    public int $migratedFromMaxId,
    public int $pinnedMsgId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStickerSetAbstractData $stickerset,
    public int $availableMinId,
    public int $folderId,
    public int $linkedChatId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelLocationAbstractData $location,
    public int $slowmodeSeconds,
    public int $slowmodeNextSendDate,
    public int $statsDc,
    public int $pts,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputGroupCallAbstractData $call,
    public int $ttlPeriod,
    public ?array $pendingSuggestions,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $groupcallDefaultJoinAs,
    public string $themeEmoticon,
    public int $requestsPending,
    public ?array $recentRequesters,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $defaultSendAs,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatReactionsAbstractData $availableReactions,
    public int $reactionsLimit,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerStoriesAbstractData $stories,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWallPaperAbstractData $wallpaper,
    public int $boostsApplied,
    public int $boostsUnrestrict,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStickerSetAbstractData $emojiset,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotVerificationAbstractData $botVerification,
    public int $stargiftsCount,
    public int $sendPaidMessagesStars,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlProfileTabAbstractData $mainTab,
    public int $guardBotId,
    ) {
    }
}
