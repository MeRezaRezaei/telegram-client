<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for videoSize of VideoSize (crc32 de33b094). */
final class TlVideoSizeVideoSize extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_video_size_video_size';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'tl_type' => 'string',
        'w' => 'int',
        'h' => 'int',
        'tl_size' => 'int',
        'video_start_ts' => 'float',
    ];
}
