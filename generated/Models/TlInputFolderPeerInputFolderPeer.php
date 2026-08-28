<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputFolderPeer of InputFolderPeer (crc32 fbd2c296). */
final class TlInputFolderPeerInputFolderPeer extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_folder_peer_input_folder_peer';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'folder_id' => 'int',
    ];
}
