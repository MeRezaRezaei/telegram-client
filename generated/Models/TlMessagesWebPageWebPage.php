<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesWebPageWebPageChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesWebPageWebPageUsers;

/** Constructor model for messages.webPage of messages.WebPage (crc32 fd5e12bd). */
final class TlMessagesWebPageWebPage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_web_page_web_page';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'webpage' => 'string',
    ];

    public function chats(): HasMany
    {
        return $this->tlChild(TlMessagesWebPageWebPageChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesWebPageWebPageUsers::class);
    }
}
