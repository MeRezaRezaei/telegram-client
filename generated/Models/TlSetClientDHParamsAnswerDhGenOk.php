<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for dh_gen_ok of Set_client_DH_params_answer (crc32 3bcbf734). */
final class TlSetClientDHParamsAnswerDhGenOk extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_set_client__d_h_params_answer_dh_gen_ok';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'nonce' => 'string',
        'server_nonce' => 'string',
        'new_nonce_hash1' => 'string',
    ];
}
