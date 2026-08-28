<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelParticipantBanned of ChannelParticipant.
 */
final class ChannelParticipantBannedData extends TlChannelParticipantAbstractData
{
    public function __construct(
    public int $flags,
    public bool $left,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $kickedBy,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatBannedRightsAbstractData $bannedRights,
    public string $rank,
    ) {
    }
}
