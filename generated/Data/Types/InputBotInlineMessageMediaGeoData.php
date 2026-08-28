<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotInlineMessageMediaGeo of InputBotInlineMessage.
 */
final class InputBotInlineMessageMediaGeoData extends TlInputBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputGeoPointAbstractData $geoPoint,
    public ?int $heading,
    public ?int $period,
    public ?int $proximityNotificationRadius,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    ) {
    }
}
