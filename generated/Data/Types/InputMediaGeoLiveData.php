<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMediaGeoLive of InputMedia.
 */
final class InputMediaGeoLiveData extends TlInputMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $stopped,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputGeoPointAbstractData $geoPoint,
    public int $heading,
    public int $period,
    public int $proximityNotificationRadius,
    ) {
    }
}
