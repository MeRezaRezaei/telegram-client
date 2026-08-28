<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.exportedChatInviteReplaced of messages.ExportedChatInvite.
 */
final class TlMessagesExportedChatInviteReplacedData extends TlMessagesExportedChatInviteAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatInviteAbstractData $invite,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatInviteAbstractData $newInvite,
    public array $users,
    ) {
    }
}
