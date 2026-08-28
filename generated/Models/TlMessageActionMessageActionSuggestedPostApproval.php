<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionSuggestedPostApproval of MessageAction (crc32 ee7a1596). */
final class TlMessageActionMessageActionSuggestedPostApproval extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_suggested_post_approval';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'rejected' => 'bool',
        'balance_too_low' => 'bool',
        'reject_comment' => 'string',
        'schedule_date' => 'int',
        'price' => 'string',
    ];
}
