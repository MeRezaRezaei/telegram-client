<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param sizes (table tl_photo_size_photo_size_progressive__sizes). */
final class TlPhotoSizePhotoSizeProgressiveSizes extends TlAnchorModel
{
    protected $table = 'tl_photo_size_photo_size_progressive__sizes';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
