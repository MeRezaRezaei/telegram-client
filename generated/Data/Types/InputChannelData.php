<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputChannel of InputChannel.
 */
final class InputChannelData extends TlInputChannelAbstractData
{
    public function __construct(
    public int $channelId,
    public int $accessHash,
    ) {
    }
}
