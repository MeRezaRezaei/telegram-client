<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for speakingInGroupCallAction of SendMessageAction (crc32 d92c2285). */
final class TlSendMessageActionSpeakingInGroupCallAction extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_send_message_action_speaking_in_group_call_action';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
