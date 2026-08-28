<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for chatTheme of ChatTheme (crc32 c3dffc04). */
final class TlChatThemeChatTheme extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_chat_theme_chat_theme';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'emoticon' => 'string',
    ];
}
