<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for msg_detailed_info of MsgDetailedInfo.
 */
final class MsgDetailedInfoData extends TlMsgDetailedInfoAbstractData
{
    public function __construct(
    public int $msgId,
    public int $answerMsgId,
    public int $bytes,
    public int $status,
    ) {
    }
}
