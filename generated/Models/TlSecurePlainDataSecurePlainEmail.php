<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for securePlainEmail of SecurePlainData (crc32 21ec5a5f). */
final class TlSecurePlainDataSecurePlainEmail extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_secure_plain_data_secure_plain_email';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'email' => 'string',
    ];
}
