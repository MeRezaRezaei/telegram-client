<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionGiveawayResults of MessageAction.
 */
final class MessageActionGiveawayResultsData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $stars,
    public int $winnersCount,
    public int $unclaimedCount,
    ) {
    }
}
