<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for msg_new_detailed_info of MsgDetailedInfo.
 */
final class MsgNewDetailedInfoData extends TlMsgDetailedInfoAbstractData
{
    public function __construct(
    public int $answerMsgId,
    public int $bytes,
    public int $status,
    ) {
    }
}
