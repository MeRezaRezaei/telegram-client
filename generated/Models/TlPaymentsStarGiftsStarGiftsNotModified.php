<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for payments.starGiftsNotModified of payments.StarGifts (crc32 a388a368). */
final class TlPaymentsStarGiftsStarGiftsNotModified extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_star_gifts_star_gifts_not_modified';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
