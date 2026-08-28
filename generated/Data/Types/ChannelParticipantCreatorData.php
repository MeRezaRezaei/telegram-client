<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelParticipantCreator of ChannelParticipant.
 */
final class ChannelParticipantCreatorData extends TlChannelParticipantAbstractData
{
    public function __construct(
    public int $flags,
    public int $userId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $adminRights,
    public string $rank,
    ) {
    }
}
