<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.transcribedAudio of messages.TranscribedAudio.
 */
final class TlMessagesTranscribedAudioData extends TlMessagesTranscribedAudioAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pending,
    public int $transcriptionId,
    public string $text,
    public int $trialRemainsNum,
    public int $trialRemainsUntilDate,
    ) {
    }
}
