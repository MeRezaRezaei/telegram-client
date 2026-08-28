<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMediaAreaChannelPost of MediaArea.
 */
final class InputMediaAreaChannelPostData extends TlMediaAreaAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMediaAreaCoordinatesAbstractData $coordinates,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputChannelAbstractData $channel,
    public int $msgId,
    ) {
    }
}
