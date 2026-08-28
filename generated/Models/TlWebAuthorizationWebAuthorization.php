<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for webAuthorization of WebAuthorization (crc32 a6f8f452). */
final class TlWebAuthorizationWebAuthorization extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_web_authorization_web_authorization';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
        'bot_id' => 'int',
        'domain' => 'string',
        'browser' => 'string',
        'platform' => 'string',
        'date_created' => 'int',
        'date_active' => 'int',
        'ip' => 'string',
        'region' => 'string',
    ];
}
