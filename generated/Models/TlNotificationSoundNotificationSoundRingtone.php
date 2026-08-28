<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for notificationSoundRingtone of NotificationSound (crc32 ff6c8049). */
final class TlNotificationSoundNotificationSoundRingtone extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_notification_sound_notification_sound_ringtone';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'int',
    ];
}
