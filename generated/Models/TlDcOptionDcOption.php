<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for dcOption of DcOption (crc32 18b7a10d). */
final class TlDcOptionDcOption extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_dc_option_dc_option';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'ipv6' => 'bool',
        'media_only' => 'bool',
        'tcpo_only' => 'bool',
        'cdn' => 'bool',
        'static' => 'bool',
        'this_port_only' => 'bool',
        'tl_id' => 'int',
        'ip_address' => 'string',
        'port' => 'int',
        'secret' => 'string',
    ];
}
