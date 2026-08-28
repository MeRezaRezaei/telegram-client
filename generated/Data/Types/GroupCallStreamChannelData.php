<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for groupCallStreamChannel of GroupCallStreamChannel.
 */
final class GroupCallStreamChannelData extends TlGroupCallStreamChannelAbstractData
{
    public function __construct(
    public int $channel,
    public int $scale,
    public int $lastTimestampMs,
    ) {
    }
}
