<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessageActionMessageActionRequestedPeerSentMePeers;

/** Constructor model for messageActionRequestedPeerSentMe of MessageAction (crc32 93b31848). */
final class TlMessageActionMessageActionRequestedPeerSentMe extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_message_action_message_action_requested_peer_sent_me';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'button_id' => 'int',
    ];

    public function peers(): HasMany
    {
        return $this->tlChild(TlMessageActionMessageActionRequestedPeerSentMePeers::class);
    }
}
