<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for phoneConnection of PhoneConnection (crc32 9cc123c7). */
final class TlPhoneConnectionPhoneConnection extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_phone_connection_phone_connection';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'tcp' => 'bool',
        'tl_id' => 'int',
        'ip' => 'string',
        'ipv6' => 'string',
        'port' => 'int',
        'peer_tag' => 'string',
    ];
}
