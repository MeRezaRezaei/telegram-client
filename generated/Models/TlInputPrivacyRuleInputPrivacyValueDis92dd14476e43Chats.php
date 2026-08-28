<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param chats (table tl_input_privacy_rule_input_privacy_value_dis_bb41d2b871d8). */
final class TlInputPrivacyRuleInputPrivacyValueDis92dd14476e43Chats extends TlAnchorModel
{
    protected $table = 'tl_input_privacy_rule_input_privacy_value_dis_bb41d2b871d8';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
