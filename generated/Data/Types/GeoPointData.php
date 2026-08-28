<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for geoPoint of GeoPoint.
 */
final class GeoPointData extends TlGeoPointAbstractData
{
    public function __construct(
    public int $flags,
    public float $long,
    public float $lat,
    public int $accessHash,
    public ?int $accuracyRadius,
    ) {
    }
}
