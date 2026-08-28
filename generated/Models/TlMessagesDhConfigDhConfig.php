<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messages.dhConfig of messages.DhConfig (crc32 2c221edd). */
final class TlMessagesDhConfigDhConfig extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_dh_config_dh_config';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'g' => 'int',
        'p' => 'string',
        'version' => 'int',
        'random' => 'string',
    ];
}
