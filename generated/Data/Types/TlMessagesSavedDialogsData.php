<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.savedDialogs of messages.SavedDialogs.
 */
final class TlMessagesSavedDialogsData extends TlMessagesSavedDialogsAbstractData
{
    public function __construct(
    public array $dialogs,
    public array $messages,
    public array $chats,
    public array $users,
    ) {
    }
}
