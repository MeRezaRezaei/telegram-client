<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftUnique of StarGift.
 */
final class StarGiftUniqueData extends TlStarGiftAbstractData
{
    public function __construct(
    public int $flags,
    public bool $requirePremium,
    public bool $resaleTonOnly,
    public bool $themeAvailable,
    public bool $burned,
    public bool $crafted,
    public int $id,
    public int $giftId,
    public string $title,
    public string $slug,
    public int $num,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $ownerId,
    public string $ownerName,
    public string $ownerAddress,
    public array $attributes,
    public int $availabilityIssued,
    public int $availabilityTotal,
    public string $giftAddress,
    public ?array $resellAmount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $releasedBy,
    public int $valueAmount,
    public string $valueCurrency,
    public int $valueUsdAmount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $themePeer,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerColorAbstractData $peerColor,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $hostId,
    public int $offerMinStars,
    public int $craftChancePermille,
    ) {
    }
}
