<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlGroupCallParticipantVideoSourceGroupD4c024526fb4Sources;

/** Constructor model for groupCallParticipantVideoSourceGroup of GroupCallParticipantVideoSourceGroup (crc32 dcb118b7). */
final class TlGroupCallParticipantVideoSourceGroupGroupCallParticipantVideoSourceGroup extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_group_call_participant_video_source_group__d4c024526fb4';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'semantics' => 'string',
    ];

    public function sources(): HasMany
    {
        return $this->tlChild(TlGroupCallParticipantVideoSourceGroupD4c024526fb4Sources::class);
    }
}
