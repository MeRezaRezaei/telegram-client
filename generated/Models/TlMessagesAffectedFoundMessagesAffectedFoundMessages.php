<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesAffectedFoundMessagesAffectedD0b5b58c5216Messages;

/** Constructor model for messages.affectedFoundMessages of messages.AffectedFoundMessages (crc32 ef8d3e6c). */
final class TlMessagesAffectedFoundMessagesAffectedFoundMessages extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_affected_found_messages_affected__d0b5b58c5216';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'pts' => 'int',
        'pts_count' => 'int',
        'tl_offset' => 'int',
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlMessagesAffectedFoundMessagesAffectedD0b5b58c5216Messages::class);
    }
}
