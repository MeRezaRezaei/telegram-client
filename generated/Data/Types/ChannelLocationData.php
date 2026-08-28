<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelLocation of ChannelLocation.
 */
final class ChannelLocationData extends TlChannelLocationAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlGeoPointAbstractData $geoPoint,
    public string $address,
    ) {
    }
}
