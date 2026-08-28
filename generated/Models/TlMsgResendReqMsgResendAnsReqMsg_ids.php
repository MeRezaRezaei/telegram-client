<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param msg_ids (table tl_msg_resend_req_msg_resend_ans_req__msg_ids). */
final class TlMsgResendReqMsgResendAnsReqMsg_ids extends TlAnchorModel
{
    protected $table = 'tl_msg_resend_req_msg_resend_ans_req__msg_ids';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
