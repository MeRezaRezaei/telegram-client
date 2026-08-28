<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for secureValueHash of SecureValueHash (crc32 ed1ecdb0). */
final class TlSecureValueHashSecureValueHash extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_secure_value_hash_secure_value_hash';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_type' => 'string',
        'hash' => 'string',
    ];
}
