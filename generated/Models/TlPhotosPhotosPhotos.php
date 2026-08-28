<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhotosPhotosPhotosPhotos;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhotosPhotosPhotosUsers;

/** Constructor model for photos.photos of photos.Photos (crc32 8dca6aa5). */
final class TlPhotosPhotosPhotos extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_photos_photos_photos';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function photos(): HasMany
    {
        return $this->tlChild(TlPhotosPhotosPhotosPhotos::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPhotosPhotosPhotosUsers::class);
    }
}
