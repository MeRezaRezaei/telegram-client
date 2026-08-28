<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlKeyboardButtonRowKeyboardButtonRowButtons;

/** Constructor model for keyboardButtonRow of KeyboardButtonRow (crc32 77608b83). */
final class TlKeyboardButtonRowKeyboardButtonRow extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_keyboard_button_row_keyboard_button_row';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function buttons(): HasMany
    {
        return $this->tlChild(TlKeyboardButtonRowKeyboardButtonRowButtons::class);
    }
}
