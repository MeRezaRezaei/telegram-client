<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param recent_requesters (table tl_update_update_pending_join_requests__recent_requesters). */
final class TlUpdateUpdatePendingJoinRequestsRecent_requesters extends TlAnchorModel
{
    protected $table = 'tl_update_update_pending_join_requests__recent_requesters';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
