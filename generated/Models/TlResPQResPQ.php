<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlResPQResPQServer_public_key_fingerprints;

/** Constructor model for resPQ of ResPQ (crc32 05162463). */
final class TlResPQResPQ extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_res_p_q_res_p_q';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'nonce' => 'string',
        'server_nonce' => 'string',
        'pq' => 'string',
    ];

    public function serverPublicKeyFingerprints(): HasMany
    {
        return $this->tlChild(TlResPQResPQServer_public_key_fingerprints::class);
    }
}
