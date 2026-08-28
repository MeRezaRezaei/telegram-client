<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for profileTabVoice of ProfileTab (crc32 e477092e). */
final class TlProfileTabProfileTabVoice extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_profile_tab_profile_tab_voice';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
