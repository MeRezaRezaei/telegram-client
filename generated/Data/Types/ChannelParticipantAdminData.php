<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelParticipantAdmin of ChannelParticipant.
 */
final class ChannelParticipantAdminData extends TlChannelParticipantAbstractData
{
    public function __construct(
    public int $flags,
    public bool $canEdit,
    public bool $self,
    public int $userId,
    public int $inviterId,
    public int $promotedBy,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $adminRights,
    public string $rank,
    ) {
    }
}
