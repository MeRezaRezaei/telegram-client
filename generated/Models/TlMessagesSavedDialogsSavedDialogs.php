<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsDialogs;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsMessages;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesSavedDialogsSavedDialogsUsers;

/** Constructor model for messages.savedDialogs of messages.SavedDialogs (crc32 f83ae221). */
final class TlMessagesSavedDialogsSavedDialogs extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_saved_dialogs_saved_dialogs';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function dialogs(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsDialogs::class);
    }
    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsMessages::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesSavedDialogsSavedDialogsUsers::class);
    }
}
