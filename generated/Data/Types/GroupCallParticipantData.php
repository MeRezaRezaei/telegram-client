<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for groupCallParticipant of GroupCallParticipant.
 */
final class GroupCallParticipantData extends TlGroupCallParticipantAbstractData
{
    public function __construct(
    public int $flags,
    public bool $muted,
    public bool $left,
    public bool $canSelfUnmute,
    public bool $justJoined,
    public bool $versioned,
    public bool $min,
    public bool $mutedByYou,
    public bool $volumeByAdmin,
    public bool $self,
    public bool $videoJoined,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $date,
    public int $activeDate,
    public int $source,
    public int $volume,
    public string $about,
    public int $raiseHandRating,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlGroupCallParticipantVideoAbstractData $video,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlGroupCallParticipantVideoAbstractData $presentation,
    public int $paidStarsTotal,
    ) {
    }
}
