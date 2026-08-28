<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateReadMonoForumInbox of Update.
 */
final class UpdateReadMonoForumInboxData extends TlUpdateAbstractData
{
    public function __construct(
    public int $channelId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $savedPeerId,
    public int $readMaxId,
    ) {
    }
}
