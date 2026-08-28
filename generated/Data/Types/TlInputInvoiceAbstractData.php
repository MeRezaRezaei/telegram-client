<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/**
 * Union DTO base for TL type InputInvoice.
 *
 * @method static static fromWire(array $payload)
 */
abstract class TlInputInvoiceAbstractData extends Data
{
    /** @var array<string, class-string<self>> */
    protected const DISPATCH = [
        'inputInvoiceBusinessBotTransferStars' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceBusinessBotTransferStarsData::class,
        'inputInvoiceChatInviteSubscription' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceChatInviteSubscriptionData::class,
        'inputInvoiceMessage' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceMessageData::class,
        'inputInvoicePremiumAuthCode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoicePremiumAuthCodeData::class,
        'inputInvoicePremiumGiftCode' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoicePremiumGiftCodeData::class,
        'inputInvoicePremiumGiftStars' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoicePremiumGiftStarsData::class,
        'inputInvoiceSlug' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceSlugData::class,
        'inputInvoiceStarGift' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarGiftData::class,
        'inputInvoiceStarGiftAuctionBid' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarGiftAuctionBidData::class,
        'inputInvoiceStarGiftDropOriginalDetails' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarGiftDropOriginalDetailsData::class,
        'inputInvoiceStarGiftPrepaidUpgrade' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarGiftPrepaidUpgradeData::class,
        'inputInvoiceStarGiftResale' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarGiftResaleData::class,
        'inputInvoiceStarGiftTransfer' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarGiftTransferData::class,
        'inputInvoiceStarGiftUpgrade' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarGiftUpgradeData::class,
        'inputInvoiceStars' => \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\InputInvoiceStarsData::class,
    ];

    /** Dispatch on the constructor name carried under the '_' key of a decoded wire payload. */
    public static function fromWire(array $payload): static
    {
        $class = static::DISPATCH[$payload['_']]
            ?? throw new \InvalidArgumentException('Unknown constructor ' . $payload['_'] . ' for InputInvoice');
        /** @var static */
        return $class::from($payload);
    }
}
