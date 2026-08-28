<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionToggleSlowMode of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionToggleSlowModeData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public int $prevValue,
    public int $newValue,
    ) {
    }
}
