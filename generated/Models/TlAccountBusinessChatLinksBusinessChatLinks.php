<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountBusinessChatLinksBusinessChatLinksLinks;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountBusinessChatLinksBusinessChatLinksChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountBusinessChatLinksBusinessChatLinksUsers;

/** Constructor model for account.businessChatLinks of account.BusinessChatLinks (crc32 ec43a2d1). */
final class TlAccountBusinessChatLinksBusinessChatLinks extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_business_chat_links_business_chat_links';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function links(): HasMany
    {
        return $this->tlChild(TlAccountBusinessChatLinksBusinessChatLinksLinks::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlAccountBusinessChatLinksBusinessChatLinksChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlAccountBusinessChatLinksBusinessChatLinksUsers::class);
    }
}
