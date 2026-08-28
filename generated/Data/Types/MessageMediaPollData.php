<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageMediaPoll of MessageMedia.
 */
final class MessageMediaPollData extends TlMessageMediaAbstractData
{
    public function __construct(
    public int $flags,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPollAbstractData $poll,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPollResultsAbstractData $results,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlMessageMediaAbstractData $attachedMedia,
    ) {
    }
}
