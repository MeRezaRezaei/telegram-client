<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type MessageAction.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlMessageActionAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'messageActionBoostApply' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionBoostApplyData::class,
        'messageActionBotAllowed' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionBotAllowedData::class,
        'messageActionChangeCreator' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChangeCreatorData::class,
        'messageActionChannelCreate' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChannelCreateData::class,
        'messageActionChannelMigrateFrom' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChannelMigrateFromData::class,
        'messageActionChatAddUser' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatAddUserData::class,
        'messageActionChatCreate' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatCreateData::class,
        'messageActionChatDeletePhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatDeletePhotoData::class,
        'messageActionChatDeleteUser' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatDeleteUserData::class,
        'messageActionChatEditPhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatEditPhotoData::class,
        'messageActionChatEditTitle' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatEditTitleData::class,
        'messageActionChatJoinedByLink' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatJoinedByLinkData::class,
        'messageActionChatJoinedByRequest' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatJoinedByRequestData::class,
        'messageActionChatMigrateTo' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionChatMigrateToData::class,
        'messageActionConferenceCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionConferenceCallData::class,
        'messageActionContactSignUp' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionContactSignUpData::class,
        'messageActionCustomAction' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionCustomActionData::class,
        'messageActionEmpty' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionEmptyData::class,
        'messageActionGameScore' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGameScoreData::class,
        'messageActionGeoProximityReached' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGeoProximityReachedData::class,
        'messageActionGiftCode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGiftCodeData::class,
        'messageActionGiftPremium' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGiftPremiumData::class,
        'messageActionGiftStars' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGiftStarsData::class,
        'messageActionGiftTon' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGiftTonData::class,
        'messageActionGiveawayLaunch' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGiveawayLaunchData::class,
        'messageActionGiveawayResults' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGiveawayResultsData::class,
        'messageActionGroupCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGroupCallData::class,
        'messageActionGroupCallScheduled' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionGroupCallScheduledData::class,
        'messageActionHistoryClear' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionHistoryClearData::class,
        'messageActionInviteToGroupCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionInviteToGroupCallData::class,
        'messageActionManagedBotCreated' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionManagedBotCreatedData::class,
        'messageActionNewCreatorPending' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionNewCreatorPendingData::class,
        'messageActionNoForwardsRequest' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionNoForwardsRequestData::class,
        'messageActionNoForwardsToggle' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionNoForwardsToggleData::class,
        'messageActionPaidMessagesPrice' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPaidMessagesPriceData::class,
        'messageActionPaidMessagesRefunded' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPaidMessagesRefundedData::class,
        'messageActionPaymentRefunded' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPaymentRefundedData::class,
        'messageActionPaymentSent' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPaymentSentData::class,
        'messageActionPaymentSentMe' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPaymentSentMeData::class,
        'messageActionPhoneCall' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPhoneCallData::class,
        'messageActionPinMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPinMessageData::class,
        'messageActionPollAppendAnswer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPollAppendAnswerData::class,
        'messageActionPollDeleteAnswer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPollDeleteAnswerData::class,
        'messageActionPrizeStars' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionPrizeStarsData::class,
        'messageActionRequestedPeer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionRequestedPeerData::class,
        'messageActionRequestedPeerSentMe' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionRequestedPeerSentMeData::class,
        'messageActionScreenshotTaken' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionScreenshotTakenData::class,
        'messageActionSecureValuesSent' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSecureValuesSentData::class,
        'messageActionSecureValuesSentMe' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSecureValuesSentMeData::class,
        'messageActionSetChatTheme' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSetChatThemeData::class,
        'messageActionSetChatWallPaper' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSetChatWallPaperData::class,
        'messageActionSetMessagesTTL' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSetMessagesTTLData::class,
        'messageActionStarGift' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionStarGiftData::class,
        'messageActionStarGiftPurchaseOffer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionStarGiftPurchaseOfferData::class,
        'messageActionStarGiftPurchaseOfferDeclined' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionStarGiftPurchaseOfferDeclinedData::class,
        'messageActionStarGiftUnique' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionStarGiftUniqueData::class,
        'messageActionSuggestBirthday' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSuggestBirthdayData::class,
        'messageActionSuggestProfilePhoto' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSuggestProfilePhotoData::class,
        'messageActionSuggestedPostApproval' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSuggestedPostApprovalData::class,
        'messageActionSuggestedPostRefund' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSuggestedPostRefundData::class,
        'messageActionSuggestedPostSuccess' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionSuggestedPostSuccessData::class,
        'messageActionTodoAppendTasks' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionTodoAppendTasksData::class,
        'messageActionTodoCompletions' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionTodoCompletionsData::class,
        'messageActionTopicCreate' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionTopicCreateData::class,
        'messageActionTopicEdit' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionTopicEditData::class,
        'messageActionWebViewDataSent' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionWebViewDataSentData::class,
        'messageActionWebViewDataSentMe' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\MessageActionWebViewDataSentMeData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for MessageAction');
        /** @var static */
        return $class::from($payload);
    }
}
