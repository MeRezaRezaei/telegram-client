<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updatePaidReactionPrivacy of Update (crc32 8b725fce). */
final class TlUpdateUpdatePaidReactionPrivacy extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_paid_reaction_privacy';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'private' => 'string',
    ];
}
