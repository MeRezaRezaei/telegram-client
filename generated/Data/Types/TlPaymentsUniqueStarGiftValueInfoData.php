<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for payments.uniqueStarGiftValueInfo of payments.UniqueStarGiftValueInfo.
 */
final class TlPaymentsUniqueStarGiftValueInfoData extends TlPaymentsUniqueStarGiftValueInfoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $lastSaleOnFragment,
    public bool $valueIsAverage,
    public string $currency,
    public int $value,
    public int $initialSaleDate,
    public int $initialSaleStars,
    public int $initialSalePrice,
    public int $lastSaleDate,
    public int $lastSalePrice,
    public int $floorPrice,
    public int $averagePrice,
    public int $listedCount,
    public int $fragmentListedCount,
    public string $fragmentListedUrl,
    ) {
    }
}
