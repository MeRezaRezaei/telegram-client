<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsStarGiftCollectionsStarGiftCollectionsCollections;

/** Constructor model for payments.starGiftCollections of payments.StarGiftCollections (crc32 8a2932f3). */
final class TlPaymentsStarGiftCollectionsStarGiftCollections extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_star_gift_collections_star_gift_collections';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function collections(): HasMany
    {
        return $this->tlChild(TlPaymentsStarGiftCollectionsStarGiftCollectionsCollections::class);
    }
}
