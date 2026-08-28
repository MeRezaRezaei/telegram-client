<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdatesUpdateShortSentMessageEntities;

/** Constructor model for updateShortSentMessage of Updates (crc32 9015e101). */
final class TlUpdatesUpdateShortSentMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_updates_update_short_sent_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'out' => 'bool',
        'tl_id' => 'int',
        'pts' => 'int',
        'pts_count' => 'int',
        'date' => 'int',
        'media' => 'string',
        'ttl_period' => 'int',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlUpdatesUpdateShortSentMessageEntities::class);
    }
}
