<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.dialogsSlice of messages.Dialogs.
 */
final class TlMessagesDialogsSliceData extends TlMessagesDialogsAbstractData
{
    public function __construct(
    public int $count,
    public array $dialogs,
    public array $messages,
    public array $chats,
    public array $users,
    ) {
    }
}
