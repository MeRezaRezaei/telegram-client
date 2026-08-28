<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhotosPhotosPhotosSlicePhotos;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhotosPhotosPhotosSliceUsers;

/** Constructor model for photos.photosSlice of photos.Photos (crc32 15051f54). */
final class TlPhotosPhotosPhotosSlice extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_photos_photos_photos_slice';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'count' => 'int',
    ];

    public function photos(): HasMany
    {
        return $this->tlChild(TlPhotosPhotosPhotosSlicePhotos::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPhotosPhotosPhotosSliceUsers::class);
    }
}
