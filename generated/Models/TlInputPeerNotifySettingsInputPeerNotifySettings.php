<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPeerNotifySettings of InputPeerNotifySettings (crc32 cacb6ae2). */
final class TlInputPeerNotifySettingsInputPeerNotifySettings extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_peer_notify_settings_input_peer_notify_settings';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'show_previews' => 'string',
        'silent' => 'string',
        'mute_until' => 'int',
        'sound' => 'string',
        'stories_muted' => 'string',
        'stories_hide_sender' => 'string',
        'stories_sound' => 'string',
    ];
}
