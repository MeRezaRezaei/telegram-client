<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaUploadedPhotoStickers;

/** Constructor model for inputMediaUploadedPhoto of InputMedia (crc32 7d8375da). */
final class TlInputMediaInputMediaUploadedPhoto extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_media_input_media_uploaded_photo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'spoiler' => 'bool',
        'live_photo' => 'bool',
        'file' => 'string',
        'ttl_seconds' => 'int',
        'video' => 'string',
    ];

    public function stickers(): HasMany
    {
        return $this->tlChild(TlInputMediaInputMediaUploadedPhotoStickers::class);
    }
}
