<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Methods;

use Spatie\LaravelData\Data;

/** Request DTO for RPC method messages.transcribeAudio (crc32 269e9a49), returns messages.TranscribedAudio. */
final class TlMessagesTranscribeAudioData extends Data
{
    public const METHOD = 'messages.transcribeAudio';

    public static function method(): string
    {
        return self::METHOD;
    }

    public function __construct(
    public mixed $peer,
    public int $msgId,
    ) {
    }
}
