<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatlists.exportedChatlistInvite of chatlists.ExportedChatlistInvite.
 */
final class TlChatlistsExportedChatlistInviteData extends TlChatlistsExportedChatlistInviteAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDialogFilterAbstractData $filter,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatlistInviteAbstractData $invite,
    ) {
    }
}
