<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inlineBotWebView of InlineBotWebView (crc32 b57295d5). */
final class TlInlineBotWebViewInlineBotWebView extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_inline_bot_web_view_inline_bot_web_view';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
        'url' => 'string',
    ];
}
