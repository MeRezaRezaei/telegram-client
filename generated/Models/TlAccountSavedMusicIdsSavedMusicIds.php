<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlAccountSavedMusicIdsSavedMusicIdsIds;

/** Constructor model for account.savedMusicIds of account.SavedMusicIds (crc32 998d6636). */
final class TlAccountSavedMusicIdsSavedMusicIds extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_account_saved_music_ids_saved_music_ids';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function ids(): HasMany
    {
        return $this->tlChild(TlAccountSavedMusicIdsSavedMusicIdsIds::class);
    }
}
