<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhotosPhotoPhotoUsers;

/** Constructor model for photos.photo of photos.Photo (crc32 20212ca8). */
final class TlPhotosPhotoPhoto extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_photos_photo_photo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'photo' => 'string',
    ];

    public function users(): HasMany
    {
        return $this->tlChild(TlPhotosPhotoPhotoUsers::class);
    }
}
