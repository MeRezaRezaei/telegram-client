<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for bad_server_salt of BadMsgNotification (crc32 edab447b). */
final class TlBadMsgNotificationBadServerSalt extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bad_msg_notification_bad_server_salt';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'bad_msg_id' => 'int',
        'bad_msg_seqno' => 'int',
        'error_code' => 'int',
        'new_server_salt' => 'int',
    ];
}
