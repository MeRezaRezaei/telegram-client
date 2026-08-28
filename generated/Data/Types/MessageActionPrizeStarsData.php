<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionPrizeStars of MessageAction.
 */
final class MessageActionPrizeStarsData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $unclaimed,
    public int $stars,
    public string $transactionId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $boostPeer,
    public int $giveawayMsgId,
    ) {
    }
}
