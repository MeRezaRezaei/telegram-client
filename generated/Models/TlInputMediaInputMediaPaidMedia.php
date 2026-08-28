<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputMediaInputMediaPaidMediaExtended_media;

/** Constructor model for inputMediaPaidMedia of InputMedia (crc32 c4103386). */
final class TlInputMediaInputMediaPaidMedia extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_media_input_media_paid_media';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'stars_amount' => 'int',
        'payload' => 'string',
    ];

    public function extendedMedia(): HasMany
    {
        return $this->tlChild(TlInputMediaInputMediaPaidMediaExtended_media::class);
    }
}
