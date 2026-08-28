<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesUpdates;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesUsers;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesChats;

/** Constructor model for updates of Updates (crc32 74ae4240). */
final class TlUpdatesUpdates extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_updates_updates';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'date' => 'int',
        'seq' => 'int',
    ];

    public function updates(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdatesUpdates::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdatesUsers::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdatesChats::class);
    }
}
