<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionChangeLocation of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionChangeLocationData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelLocationAbstractData $prevValue,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelLocationAbstractData $newValue,
    ) {
    }
}
