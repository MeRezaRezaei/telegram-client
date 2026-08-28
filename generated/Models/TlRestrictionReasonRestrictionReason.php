<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for restrictionReason of RestrictionReason (crc32 d072acb4). */
final class TlRestrictionReasonRestrictionReason extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_restriction_reason_restriction_reason';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'platform' => 'string',
        'reason' => 'string',
        'text' => 'string',
    ];
}
