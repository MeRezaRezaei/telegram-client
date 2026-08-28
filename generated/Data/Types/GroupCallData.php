<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for groupCall of GroupCall.
 */
final class GroupCallData extends TlGroupCallAbstractData
{
    public function __construct(
    public int $flags,
    public bool $joinMuted,
    public bool $canChangeJoinMuted,
    public bool $joinDateAsc,
    public bool $scheduleStartSubscribed,
    public bool $canStartVideo,
    public bool $recordVideoActive,
    public bool $rtmpStream,
    public bool $listenersHidden,
    public bool $conference,
    public bool $creator,
    public bool $messagesEnabled,
    public bool $canChangeMessagesEnabled,
    public bool $min,
    public int $id,
    public int $accessHash,
    public int $participantsCount,
    public string $title,
    public int $streamDcId,
    public int $recordStartDate,
    public int $scheduleDate,
    public int $unmutedVideoCount,
    public int $unmutedVideoLimit,
    public int $version,
    public string $inviteLink,
    public int $sendPaidMessagesStars,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $defaultSendAs,
    ) {
    }
}
