<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for contacts.sponsoredPeersEmpty of contacts.SponsoredPeers (crc32 ea32b4b1). */
final class TlContactsSponsoredPeersSponsoredPeersEmpty extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_contacts_sponsored_peers_sponsored_peers_empty';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
