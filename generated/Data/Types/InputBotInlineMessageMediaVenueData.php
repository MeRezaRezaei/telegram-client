<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotInlineMessageMediaVenue of InputBotInlineMessage.
 */
final class InputBotInlineMessageMediaVenueData extends TlInputBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputGeoPointAbstractData $geoPoint,
    public string $title,
    public string $address,
    public string $provider,
    public string $venueId,
    public string $venueType,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    ) {
    }
}
