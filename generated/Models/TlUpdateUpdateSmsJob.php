<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateSmsJob of Update (crc32 f16269d4). */
final class TlUpdateUpdateSmsJob extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_sms_job';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'job_id' => 'string',
    ];
}
