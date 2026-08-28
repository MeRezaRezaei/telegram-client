<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for sponsoredPeer of SponsoredPeer (crc32 c69708d3). */
final class TlSponsoredPeerSponsoredPeer extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_sponsored_peer_sponsored_peer';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'random_id' => 'string',
        'peer' => 'string',
        'sponsor_info' => 'string',
        'additional_info' => 'string',
    ];
}
