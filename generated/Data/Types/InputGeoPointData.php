<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputGeoPoint of InputGeoPoint.
 */
final class InputGeoPointData extends TlInputGeoPointAbstractData
{
    public function __construct(
    public int $flags,
    public float $lat,
    public float $long,
    public int $accuracyRadius,
    ) {
    }
}
