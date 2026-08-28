<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputQuickReplyShortcut of InputQuickReplyShortcut (crc32 24596d41). */
final class TlInputQuickReplyShortcutInputQuickReplyShortcut extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_quick_reply_shortcut_input_quick_reply_shortcut';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'shortcut' => 'string',
    ];
}
