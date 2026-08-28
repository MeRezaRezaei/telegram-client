<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for groupCallParticipantVideo of GroupCallParticipantVideo.
 */
final class GroupCallParticipantVideoData extends TlGroupCallParticipantVideoAbstractData
{
    public function __construct(
    public int $flags,
    public bool $paused,
    public string $endpoint,
    public array $sourceGroups,
    public int $audioSource,
    ) {
    }
}
