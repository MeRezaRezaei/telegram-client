<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starsTransaction of StarsTransaction.
 *
 * bytes params carried as base64 strings: bot_payload
 */
final class StarsTransactionData extends TlStarsTransactionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $refund,
    public bool $pending,
    public bool $failed,
    public bool $gift,
    public bool $reaction,
    public bool $stargiftUpgrade,
    public bool $businessTransfer,
    public bool $stargiftResale,
    public bool $postsSearch,
    public bool $stargiftPrepaidUpgrade,
    public bool $stargiftDropOriginalDetails,
    public bool $phonegroupMessage,
    public bool $stargiftAuctionBid,
    public bool $offer,
    public string $id,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $amount,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsTransactionPeerAbstractData $peer,
    public string $title,
    public string $description,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWebDocumentAbstractData $photo,
    public int $transactionDate,
    public string $transactionUrl,
    public string $botPayload,
    public int $msgId,
    public ?array $extendedMedia,
    public int $subscriptionPeriod,
    public int $giveawayPostId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $stargift,
    public int $floodskipNumber,
    public int $starrefCommissionPermille,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $starrefPeer,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $starrefAmount,
    public int $paidMessages,
    public int $premiumGiftMonths,
    public int $adsProceedsFromDate,
    public int $adsProceedsToDate,
    ) {
    }
}
