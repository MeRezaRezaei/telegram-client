<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channels.channelParticipant of channels.ChannelParticipant.
 */
final class TlChannelsChannelParticipantData extends TlChannelsChannelParticipantAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChannelParticipantAbstractData $participant,
    public array $chats,
    public array $users,
    ) {
    }
}
