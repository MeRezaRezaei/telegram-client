<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for msg_resend_ans_req of MsgResendReq.
 */
final class MsgResendAnsReqData extends TlMsgResendReqAbstractData
{
    public function __construct(
    public array $msgIds,
    ) {
    }
}
