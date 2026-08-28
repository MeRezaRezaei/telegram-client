<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for phoneConnectionWebrtc of PhoneConnection (crc32 635fe375). */
final class TlPhoneConnectionPhoneConnectionWebrtc extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_phone_connection_phone_connection_webrtc';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'turn' => 'bool',
        'stun' => 'bool',
        'tl_id' => 'int',
        'ip' => 'string',
        'ipv6' => 'string',
        'port' => 'int',
        'username' => 'string',
        'password' => 'string',
    ];
}
