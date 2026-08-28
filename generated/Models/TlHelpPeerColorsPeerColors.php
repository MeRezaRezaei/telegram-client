<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPeerColorsPeerColorsColors;

/** Constructor model for help.peerColors of help.PeerColors (crc32 00f8ed08). */
final class TlHelpPeerColorsPeerColors extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_peer_colors_peer_colors';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'hash' => 'int',
    ];

    public function colors(): HasMany
    {
        return $this->tlChild(TlHelpPeerColorsPeerColorsColors::class);
    }
}
