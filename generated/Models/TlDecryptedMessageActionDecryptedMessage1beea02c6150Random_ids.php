<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param random_ids (table tl_decrypted_message_action_decrypted_message_e89bdfd0d31d). */
final class TlDecryptedMessageActionDecryptedMessage1beea02c6150Random_ids extends TlAnchorModel
{
    protected $table = 'tl_decrypted_message_action_decrypted_message_e89bdfd0d31d';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
