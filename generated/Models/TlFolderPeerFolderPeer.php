<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for folderPeer of FolderPeer (crc32 e9baa668). */
final class TlFolderPeerFolderPeer extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_folder_peer_folder_peer';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'peer' => 'string',
        'folder_id' => 'int',
    ];
}
