<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesCombinedUpdates;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesCombinedUsers;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdatesCombinedChats;

/** Constructor model for updatesCombined of Updates (crc32 725b04c3). */
final class TlUpdatesUpdatesCombined extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_updates_updates_combined';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'date' => 'int',
        'seq_start' => 'int',
        'seq' => 'int',
    ];

    public function updates(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdatesCombinedUpdates::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdatesCombinedUsers::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdatesCombinedChats::class);
    }
}
