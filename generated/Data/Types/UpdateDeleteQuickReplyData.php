<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateDeleteQuickReply of Update.
 */
final class UpdateDeleteQuickReplyData extends TlUpdateAbstractData
{
    public function __construct(
    public int $shortcutId,
    ) {
    }
}
