<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for bad_server_salt of BadMsgNotification.
 */
final class BadServerSaltData extends TlBadMsgNotificationAbstractData
{
    public function __construct(
    public int $badMsgId,
    public int $badMsgSeqno,
    public int $errorCode,
    public int $newServerSalt,
    ) {
    }
}
