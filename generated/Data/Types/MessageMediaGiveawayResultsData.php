<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaGiveawayResults of MessageMedia.
 */
final class MessageMediaGiveawayResultsData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $onlyNewSubscribers,
    public bool $refunded,
    public int $channelId,
    public int $additionalPeersCount,
    public int $launchMsgId,
    public int $winnersCount,
    public int $unclaimedCount,
    public array $winners,
    public int $months,
    public int $stars,
    public string $prizeDescription,
    public int $untilDate,
    ) {
    }
}
