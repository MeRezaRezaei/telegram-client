<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountPasskeysPasskeysPasskeys;

/** Constructor model for account.passkeys of account.Passkeys (crc32 f8e0aa1c). */
final class TlAccountPasskeysPasskeys extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_passkeys_passkeys';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function passkeys(): HasMany
    {
        return $this->tlChild(TlAccountPasskeysPasskeysPasskeys::class);
    }
}
