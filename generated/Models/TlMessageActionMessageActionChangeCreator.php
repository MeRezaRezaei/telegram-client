<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageActionChangeCreator of MessageAction (crc32 e188503b). */
final class TlMessageActionMessageActionChangeCreator extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_change_creator';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'new_creator_id' => 'int',
    ];
}
