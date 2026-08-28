<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlTopPeerCategoryPeersTopPeerCategoryPeersPeers;

/** Constructor model for topPeerCategoryPeers of TopPeerCategoryPeers (crc32 fb834291). */
final class TlTopPeerCategoryPeersTopPeerCategoryPeers extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_top_peer_category_peers_top_peer_category_peers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'category' => 'string',
        'count' => 'int',
    ];

    public function peers(): HasMany
    {
        return $this->tlChild(TlTopPeerCategoryPeersTopPeerCategoryPeersPeers::class);
    }
}
