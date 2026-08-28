<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for savedStarGift of SavedStarGift.
 */
final class SavedStarGiftData extends TlSavedStarGiftAbstractData
{
    public function __construct(
    public int $flags,
    public bool $nameHidden,
    public bool $unsaved,
    public bool $refunded,
    public bool $canUpgrade,
    public bool $pinnedToTop,
    public bool $upgradeSeparate,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $gift,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlTextWithEntitiesAbstractData $message,
    public int $msgId,
    public int $savedId,
    public int $convertStars,
    public int $upgradeStars,
    public int $canExportAt,
    public int $transferStars,
    public int $canTransferAt,
    public int $canResellAt,
    public ?array $collectionId,
    public string $prepaidUpgradeHash,
    public int $dropOriginalDetailsStars,
    public int $giftNum,
    public int $canCraftAt,
    ) {
    }
}
