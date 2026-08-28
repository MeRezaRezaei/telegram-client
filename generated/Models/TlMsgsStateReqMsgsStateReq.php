<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMsgsStateReqMsgsStateReqMsg_ids;

/** Constructor model for msgs_state_req of MsgsStateReq (crc32 da69fb52). */
final class TlMsgsStateReqMsgsStateReq extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_msgs_state_req_msgs_state_req';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function msgIds(): HasMany
    {
        return $this->tlChild(TlMsgsStateReqMsgsStateReqMsg_ids::class);
    }
}
