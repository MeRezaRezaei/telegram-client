<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountSavedRingtonesSavedRingtonesRingtones;

/** Constructor model for account.savedRingtones of account.SavedRingtones (crc32 c1e92cc5). */
final class TlAccountSavedRingtonesSavedRingtones extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_saved_ringtones_saved_ringtones';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function ringtones(): HasMany
    {
        return $this->tlChild(TlAccountSavedRingtonesSavedRingtonesRingtones::class);
    }
}
