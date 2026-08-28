<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for starGiftAuctionStateFinished of StarGiftAuctionState.
 */
final class StarGiftAuctionStateFinishedData extends TlStarGiftAuctionStateAbstractData
{
    public function __construct(
    public int $flags,
    public int $startDate,
    public int $endDate,
    public int $averagePrice,
    public ?int $listedCount,
    public ?int $fragmentListedCount,
    public ?string $fragmentListedUrl,
    ) {
    }
}
