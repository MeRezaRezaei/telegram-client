<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for reactionsNotifySettings of ReactionsNotifySettings (crc32 71e4ea58). */
final class TlReactionsNotifySettingsReactionsNotifySettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_reactions_notify_settings_reactions_notify_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'messages_notify_from' => 'string',
        'stories_notify_from' => 'string',
        'poll_votes_notify_from' => 'string',
        'sound' => 'string',
        'show_previews' => 'string',
    ];
}
