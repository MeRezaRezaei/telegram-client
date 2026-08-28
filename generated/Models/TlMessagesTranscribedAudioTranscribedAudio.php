<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messages.transcribedAudio of messages.TranscribedAudio (crc32 cfb9d957). */
final class TlMessagesTranscribedAudioTranscribedAudio extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_transcribed_audio_transcribed_audio';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'pending' => 'bool',
        'transcription_id' => 'int',
        'text' => 'string',
        'trial_remains_num' => 'int',
        'trial_remains_until_date' => 'int',
    ];
}
