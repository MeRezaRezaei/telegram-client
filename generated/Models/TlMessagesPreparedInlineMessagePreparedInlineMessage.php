<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPreparedInlineMessagePreparedAbbe0eee55f7Peer_types;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlMessagesPreparedInlineMessagePreparedAbbe0eee55f7Users;

/** Constructor model for messages.preparedInlineMessage of messages.PreparedInlineMessage (crc32 ff57708d). */
final class TlMessagesPreparedInlineMessagePreparedInlineMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_messages_prepared_inline_message_prepared__abbe0eee55f7';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'query_id' => 'int',
        'result' => 'string',
        'cache_time' => 'int',
    ];

    public function peerTypes(): HasMany
    {
        return $this->tlChild(TlMessagesPreparedInlineMessagePreparedAbbe0eee55f7Peer_types::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlMessagesPreparedInlineMessagePreparedAbbe0eee55f7Users::class);
    }
}
