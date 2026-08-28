<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for channelParticipantSelf of ChannelParticipant.
 */
final class ChannelParticipantSelfData extends TlChannelParticipantAbstractData
{
    public function __construct(
    public int $flags,
    public bool $viaRequest,
    public int $userId,
    public int $inviterId,
    public int $date,
    public int $subscriptionUntilDate,
    public string $rank,
    ) {
    }
}
