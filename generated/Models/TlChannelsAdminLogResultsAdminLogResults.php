<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsAdminLogResultsAdminLogResultsEvents;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsAdminLogResultsAdminLogResultsChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlChannelsAdminLogResultsAdminLogResultsUsers;

/** Constructor model for channels.adminLogResults of channels.AdminLogResults (crc32 ed8af74d). */
final class TlChannelsAdminLogResultsAdminLogResults extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_channels_admin_log_results_admin_log_results';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function events(): HasMany
    {
        return $this->tlChild(TlChannelsAdminLogResultsAdminLogResultsEvents::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlChannelsAdminLogResultsAdminLogResultsChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlChannelsAdminLogResultsAdminLogResultsUsers::class);
    }
}
