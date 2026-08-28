<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateChatParticipant of Update.
 */
final class UpdateChatParticipantData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public int $chatId,
    public int $date,
    public int $actorId,
    public int $userId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatParticipantAbstractData $prevParticipant,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatParticipantAbstractData $newParticipant,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatInviteAbstractData $invite,
    public int $qts,
    ) {
    }
}
