<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.exportedChatInvites of messages.ExportedChatInvites.
 */
final class TlMessagesExportedChatInvitesData extends TlMessagesExportedChatInvitesAbstractData
{
    public function __construct(
    public int $count,
    public array $invites,
    public array $users,
    ) {
    }
}
