<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for mediaAreaChannelPost of MediaArea.
 */
final class MediaAreaChannelPostData extends TlMediaAreaAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMediaAreaCoordinatesAbstractData $coordinates,
    public int $channelId,
    public int $msgId,
    ) {
    }
}
