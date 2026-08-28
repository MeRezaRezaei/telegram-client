<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type ChannelAdminLogEventAction.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlChannelAdminLogEventActionAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'channelAdminLogEventActionChangeAbout' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeAboutData::class,
        'channelAdminLogEventActionChangeAvailableReactions' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeAvailableReactionsData::class,
        'channelAdminLogEventActionChangeEmojiStatus' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeEmojiStatusData::class,
        'channelAdminLogEventActionChangeEmojiStickerSet' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeEmojiStickerSetData::class,
        'channelAdminLogEventActionChangeHistoryTTL' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeHistoryTTLData::class,
        'channelAdminLogEventActionChangeLinkedChat' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeLinkedChatData::class,
        'channelAdminLogEventActionChangeLocation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeLocationData::class,
        'channelAdminLogEventActionChangePeerColor' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangePeerColorData::class,
        'channelAdminLogEventActionChangePhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangePhotoData::class,
        'channelAdminLogEventActionChangeProfilePeerColor' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeProfilePeerColorData::class,
        'channelAdminLogEventActionChangeStickerSet' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeStickerSetData::class,
        'channelAdminLogEventActionChangeTitle' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeTitleData::class,
        'channelAdminLogEventActionChangeUsername' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeUsernameData::class,
        'channelAdminLogEventActionChangeUsernames' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeUsernamesData::class,
        'channelAdminLogEventActionChangeWallpaper' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionChangeWallpaperData::class,
        'channelAdminLogEventActionCreateTopic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionCreateTopicData::class,
        'channelAdminLogEventActionDefaultBannedRights' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionDefaultBannedRightsData::class,
        'channelAdminLogEventActionDeleteMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionDeleteMessageData::class,
        'channelAdminLogEventActionDeleteTopic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionDeleteTopicData::class,
        'channelAdminLogEventActionDiscardGroupCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionDiscardGroupCallData::class,
        'channelAdminLogEventActionEditMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionEditMessageData::class,
        'channelAdminLogEventActionEditTopic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionEditTopicData::class,
        'channelAdminLogEventActionExportedInviteDelete' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionExportedInviteDeleteData::class,
        'channelAdminLogEventActionExportedInviteEdit' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionExportedInviteEditData::class,
        'channelAdminLogEventActionExportedInviteRevoke' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionExportedInviteRevokeData::class,
        'channelAdminLogEventActionParticipantEditRank' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantEditRankData::class,
        'channelAdminLogEventActionParticipantInvite' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantInviteData::class,
        'channelAdminLogEventActionParticipantJoin' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantJoinData::class,
        'channelAdminLogEventActionParticipantJoinByInvite' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantJoinByInviteData::class,
        'channelAdminLogEventActionParticipantJoinByRequest' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantJoinByRequestData::class,
        'channelAdminLogEventActionParticipantLeave' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantLeaveData::class,
        'channelAdminLogEventActionParticipantMute' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantMuteData::class,
        'channelAdminLogEventActionParticipantSubExtend' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantSubExtendData::class,
        'channelAdminLogEventActionParticipantToggleAdmin' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantToggleAdminData::class,
        'channelAdminLogEventActionParticipantToggleBan' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantToggleBanData::class,
        'channelAdminLogEventActionParticipantUnmute' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantUnmuteData::class,
        'channelAdminLogEventActionParticipantVolume' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionParticipantVolumeData::class,
        'channelAdminLogEventActionPinTopic' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionPinTopicData::class,
        'channelAdminLogEventActionSendMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionSendMessageData::class,
        'channelAdminLogEventActionStartGroupCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionStartGroupCallData::class,
        'channelAdminLogEventActionStopPoll' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionStopPollData::class,
        'channelAdminLogEventActionToggleAntiSpam' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleAntiSpamData::class,
        'channelAdminLogEventActionToggleAutotranslation' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleAutotranslationData::class,
        'channelAdminLogEventActionToggleForum' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleForumData::class,
        'channelAdminLogEventActionToggleGroupCallSetting' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleGroupCallSettingData::class,
        'channelAdminLogEventActionToggleInvites' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleInvitesData::class,
        'channelAdminLogEventActionToggleNoForwards' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleNoForwardsData::class,
        'channelAdminLogEventActionTogglePreHistoryHidden' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionTogglePreHistoryHiddenData::class,
        'channelAdminLogEventActionToggleSignatureProfiles' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleSignatureProfilesData::class,
        'channelAdminLogEventActionToggleSignatures' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleSignaturesData::class,
        'channelAdminLogEventActionToggleSlowMode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionToggleSlowModeData::class,
        'channelAdminLogEventActionUpdatePinned' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\ChannelAdminLogEventActionUpdatePinnedData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for ChannelAdminLogEventAction');
        /** @var static */
        return $class::from($payload);
    }
}
