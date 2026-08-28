<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auth.sentCodeSuccess of auth.SentCode (crc32 2390fe44). */
final class TlAuthSentCodeSentCodeSuccess extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auth_sent_code_sent_code_success';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_authorization' => 'string',
    ];
}
