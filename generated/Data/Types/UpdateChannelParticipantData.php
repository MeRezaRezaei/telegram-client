<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateChannelParticipant of Update.
 */
final class UpdateChannelParticipantData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $viaChatlist,
    public int $channelId,
    public int $date,
    public int $actorId,
    public int $userId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelParticipantAbstractData $prevParticipant,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelParticipantAbstractData $newParticipant,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatInviteAbstractData $invite,
    public int $qts,
    ) {
    }
}
