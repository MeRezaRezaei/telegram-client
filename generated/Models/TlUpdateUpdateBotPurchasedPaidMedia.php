<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for updateBotPurchasedPaidMedia of Update (crc32 283bd312). */
final class TlUpdateUpdateBotPurchasedPaidMedia extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_bot_purchased_paid_media';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'user_id' => 'int',
        'payload' => 'string',
        'qts' => 'int',
    ];
}
