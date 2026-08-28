<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionDefaultBannedRights of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionDefaultBannedRightsData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatBannedRightsAbstractData $prevBannedRights,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatBannedRightsAbstractData $newBannedRights,
    ) {
    }
}
