<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for userFull of UserFull.
 */
final class UserFullData extends TlUserFullAbstractData
{
    public function __construct(
    public int $flags,
    public bool $blocked,
    public bool $phoneCallsAvailable,
    public bool $phoneCallsPrivate,
    public bool $canPinMessage,
    public bool $hasScheduled,
    public bool $videoCallsAvailable,
    public bool $voiceMessagesForbidden,
    public bool $translationsDisabled,
    public bool $storiesPinnedAvailable,
    public bool $blockedMyStoriesFrom,
    public bool $wallpaperOverridden,
    public bool $contactRequirePremium,
    public bool $readDatesPrivate,
    public int $flags2,
    public bool $sponsoredEnabled,
    public bool $canViewRevenue,
    public bool $botCanManageEmojiStatus,
    public bool $displayGiftsButton,
    public bool $noforwardsMyEnabled,
    public bool $noforwardsPeerEnabled,
    public bool $unofficialSecurityRisk,
    public int $id,
    public string $about,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerSettingsAbstractData $settings,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $personalPhoto,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $profilePhoto,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $fallbackPhoto,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerNotifySettingsAbstractData $notifySettings,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotInfoAbstractData $botInfo,
    public int $pinnedMsgId,
    public int $commonChatsCount,
    public int $folderId,
    public int $ttlPeriod,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatThemeAbstractData $theme,
    public string $privateForwardName,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $botGroupAdminRights,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $botBroadcastAdminRights,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWallPaperAbstractData $wallpaper,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerStoriesAbstractData $stories,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessWorkHoursAbstractData $businessWorkHours,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessLocationAbstractData $businessLocation,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessGreetingMessageAbstractData $businessGreetingMessage,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessAwayMessageAbstractData $businessAwayMessage,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBusinessIntroAbstractData $businessIntro,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBirthdayAbstractData $birthday,
    public int $personalChannelId,
    public int $personalChannelMessage,
    public int $stargiftsCount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarRefProgramAbstractData $starrefProgram,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBotVerificationAbstractData $botVerification,
    public int $sendPaidMessagesStars,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDisallowedGiftsSettingsAbstractData $disallowedGifts,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsRatingAbstractData $starsRating,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsRatingAbstractData $starsMyPendingRating,
    public int $starsMyPendingRatingDate,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlProfileTabAbstractData $mainTab,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDocumentAbstractData $savedMusic,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $note,
    public int $botManagerId,
    ) {
    }
}
