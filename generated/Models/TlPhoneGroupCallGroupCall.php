<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneGroupCallGroupCallParticipants;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneGroupCallGroupCallChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPhoneGroupCallGroupCallUsers;

/** Constructor model for phone.groupCall of phone.GroupCall (crc32 9e727aad). */
final class TlPhoneGroupCallGroupCall extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_phone_group_call_group_call';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'call' => 'string',
        'participants_next_offset' => 'string',
    ];

    public function participants(): HasMany
    {
        return $this->tlChild(TlPhoneGroupCallGroupCallParticipants::class);
    }
    public function chats(): HasMany
    {
        return $this->tlChild(TlPhoneGroupCallGroupCallChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPhoneGroupCallGroupCallUsers::class);
    }
}
