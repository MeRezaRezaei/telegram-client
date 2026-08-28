<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMsgsAllInfoMsgsAllInfoMsg_ids;

/** Constructor model for msgs_all_info of MsgsAllInfo (crc32 8cc0d131). */
final class TlMsgsAllInfoMsgsAllInfo extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_msgs_all_info_msgs_all_info';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'info' => 'string',
    ];

    public function msgIds(): HasMany
    {
        return $this->tlChild(TlMsgsAllInfoMsgsAllInfoMsg_ids::class);
    }
}
