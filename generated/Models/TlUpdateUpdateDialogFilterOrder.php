<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateDialogFilterOrderOrder;

/** Constructor model for updateDialogFilterOrder of Update (crc32 a5d72105). */
final class TlUpdateUpdateDialogFilterOrder extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_dialog_filter_order';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function order(): HasMany
    {
        return $this->tlChild(TlUpdateUpdateDialogFilterOrderOrder::class);
    }
}
