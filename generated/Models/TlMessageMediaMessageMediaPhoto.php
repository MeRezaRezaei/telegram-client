<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for messageMediaPhoto of MessageMedia (crc32 e216eb63). */
final class TlMessageMediaMessageMediaPhoto extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_media_message_media_photo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'spoiler' => 'bool',
        'live_photo' => 'bool',
        'photo' => 'string',
        'ttl_seconds' => 'int',
        'video' => 'string',
    ];
}
