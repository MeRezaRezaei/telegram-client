<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEvent of ChannelAdminLogEvent.
 */
final class ChannelAdminLogEventData extends TlChannelAdminLogEventAbstractData
{
    public function __construct(
    public int $id,
    public int $date,
    public int $userId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelAdminLogEventActionAbstractData $action,
    ) {
    }
}
