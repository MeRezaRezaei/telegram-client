<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionStarGift of MessageAction.
 */
final class MessageActionStarGiftData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $nameHidden,
    public bool $saved,
    public bool $converted,
    public bool $upgraded,
    public bool $refunded,
    public bool $canUpgrade,
    public bool $prepaidUpgrade,
    public bool $upgradeSeparate,
    public bool $auctionAcquired,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $gift,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    public int $convertStars,
    public int $upgradeMsgId,
    public int $upgradeStars,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $savedId,
    public string $prepaidUpgradeHash,
    public int $giftMsgId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $toId,
    public int $giftNum,
    ) {
    }
}
