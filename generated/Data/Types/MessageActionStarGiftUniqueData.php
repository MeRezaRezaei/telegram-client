<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionStarGiftUnique of MessageAction.
 */
final class MessageActionStarGiftUniqueData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $upgrade,
    public bool $transferred,
    public bool $saved,
    public bool $refunded,
    public bool $prepaidUpgrade,
    public bool $assigned,
    public bool $fromOffer,
    public bool $craft,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarGiftAbstractData $gift,
    public int $canExportAt,
    public int $transferStars,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $savedId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlStarsAmountAbstractData $resaleAmount,
    public int $canTransferAt,
    public int $canResellAt,
    public int $dropOriginalDetailsStars,
    public int $canCraftAt,
    ) {
    }
}
