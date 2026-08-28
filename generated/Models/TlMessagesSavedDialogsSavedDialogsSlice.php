<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsSliceDialogs;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsSliceMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsSliceChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsSliceUsers;

/** Constructor model for messages.savedDialogsSlice of messages.SavedDialogs (crc32 44ba9dd9). */
final class TlMessagesSavedDialogsSavedDialogsSlice extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_saved_dialogs_saved_dialogs_slice';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'count' => 'int',
    ];

    public function dialogs(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsSliceDialogs::class);
    }
    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsSliceMessages::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsSliceChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsSliceUsers::class);
    }
}
