<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for msgs_state_info of MsgsStateInfo (crc32 04deb57d). */
final class TlMsgsStateInfoMsgsStateInfo extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_msgs_state_info_msgs_state_info';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'req_msg_id' => 'int',
        'info' => 'string',
    ];
}
