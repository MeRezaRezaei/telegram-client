<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaVenue of MessageMedia.
 */
final class MessageMediaVenueData extends TlMessageMediaAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlGeoPointAbstractData $geo,
    public string $title,
    public string $address,
    public string $provider,
    public string $venueId,
    public string $venueType,
    ) {
    }
}
