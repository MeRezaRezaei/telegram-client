<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateTranscribedAudio of Update.
 */
final class UpdateTranscribedAudioData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pending,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $msgId,
    public int $transcriptionId,
    public string $text,
    ) {
    }
}
