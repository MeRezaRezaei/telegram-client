<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for bots.exportedBotToken of bots.ExportedBotToken (crc32 3c60b621). */
final class TlBotsExportedBotTokenExportedBotToken extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_bots_exported_bot_token_exported_bot_token';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'token' => 'string',
    ];
}
