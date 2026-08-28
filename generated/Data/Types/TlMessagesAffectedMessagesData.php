<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.affectedMessages of messages.AffectedMessages.
 */
final class TlMessagesAffectedMessagesData extends TlMessagesAffectedMessagesAbstractData
{
    public function __construct(
    public int $pts,
    public int $ptsCount,
    ) {
    }
}
