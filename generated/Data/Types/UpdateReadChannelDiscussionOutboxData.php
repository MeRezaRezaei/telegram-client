<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateReadChannelDiscussionOutbox of Update.
 */
final class UpdateReadChannelDiscussionOutboxData extends TlUpdateAbstractData
{
    public function __construct(
    public int $channelId,
    public int $topMsgId,
    public int $readMaxId,
    ) {
    }
}
