<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountResolvedBusinessChatLinksResolC591db58a589Entities;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountResolvedBusinessChatLinksResolC591db58a589Chats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountResolvedBusinessChatLinksResolC591db58a589Users;

/** Constructor model for account.resolvedBusinessChatLinks of account.ResolvedBusinessChatLinks (crc32 9a23af21). */
final class TlAccountResolvedBusinessChatLinksResolvedBusinessChatLinks extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_resolved_business_chat_links_resol_c591db58a589';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'peer' => 'string',
        'message' => 'string',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlAccountResolvedBusinessChatLinksResolC591db58a589Entities::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlAccountResolvedBusinessChatLinksResolC591db58a589Chats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlAccountResolvedBusinessChatLinksResolC591db58a589Users::class);
    }
}
