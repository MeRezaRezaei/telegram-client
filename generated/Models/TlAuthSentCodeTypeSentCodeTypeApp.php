<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for auth.sentCodeTypeApp of auth.SentCodeType (crc32 3dbb5986). */
final class TlAuthSentCodeTypeSentCodeTypeApp extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_auth_sent_code_type_sent_code_type_app';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'length' => 'int',
    ];
}
