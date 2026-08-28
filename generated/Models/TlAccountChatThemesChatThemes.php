<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountChatThemesChatThemesThemes;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountChatThemesChatThemesChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountChatThemesChatThemesUsers;

/** Constructor model for account.chatThemes of account.ChatThemes (crc32 be098173). */
final class TlAccountChatThemesChatThemes extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_chat_themes_chat_themes';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'hash' => 'int',
        'next_offset' => 'string',
    ];

    public function themes(): HasMany
    {
        return $this->tlChild(TlAccountChatThemesChatThemesThemes::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlAccountChatThemesChatThemesChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlAccountChatThemesChatThemesUsers::class);
    }
}
