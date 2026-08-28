<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelAdminLogEventActionParticipantJoinByInvite of ChannelAdminLogEventAction.
 */
final class ChannelAdminLogEventActionParticipantJoinByInviteData extends TlChannelAdminLogEventActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $viaChatlist,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatInviteAbstractData $invite,
    ) {
    }
}
