<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for photoEmpty of Photo (crc32 2331b22d). */
final class TlPhotoPhotoEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_photo_photo_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'tl_id' => 'int',
    ];
}
