<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for statsGraph of StatsGraph.
 */
final class StatsGraphData extends TlStatsGraphAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDataJSONAbstractData $json,
    public string $zoomToken,
    ) {
    }
}
