<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaGiveaway of MessageMedia.
 */
final class MessageMediaGiveawayData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $onlyNewSubscribers,
    public bool $winnersAreVisible,
    public array $channels,
    public ?array $countriesIso2,
    public string $prizeDescription,
    public int $quantity,
    public int $months,
    public int $stars,
    public int $untilDate,
    ) {
    }
}
