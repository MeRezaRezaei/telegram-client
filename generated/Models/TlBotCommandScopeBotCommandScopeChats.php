<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for botCommandScopeChats of BotCommandScope (crc32 6fe1a881). */
final class TlBotCommandScopeBotCommandScopeChats extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bot_command_scope_bot_command_scope_chats';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
