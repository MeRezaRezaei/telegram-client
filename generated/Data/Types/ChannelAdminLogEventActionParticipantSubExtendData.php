<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionParticipantSubExtend of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionParticipantSubExtendData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelParticipantAbstractData $prevParticipant,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelParticipantAbstractData $newParticipant,
    ) {
    }
}
