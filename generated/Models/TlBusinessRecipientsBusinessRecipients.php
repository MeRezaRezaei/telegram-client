<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlBusinessRecipientsBusinessRecipientsUsers;

/** Constructor model for businessRecipients of BusinessRecipients (crc32 21108ff7). */
final class TlBusinessRecipientsBusinessRecipients extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_business_recipients_business_recipients';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'existing_chats' => 'bool',
        'new_chats' => 'bool',
        'contacts' => 'bool',
        'non_contacts' => 'bool',
        'exclude_selected' => 'bool',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlBusinessRecipientsBusinessRecipientsUsers::class);
    }
}
