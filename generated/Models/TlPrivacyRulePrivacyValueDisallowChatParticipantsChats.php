<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param chats (table tl_privacy_rule_privacy_value_disallow_chat_p_e44ae86ddb9b). */
final class TlPrivacyRulePrivacyValueDisallowChatParticipantsChats extends TlAnchorModel
{
    protected $table = 'tl_privacy_rule_privacy_value_disallow_chat_p_e44ae86ddb9b';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
