<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param users (table tl_privacy_rule_privacy_value_allow_users__users). */
final class TlPrivacyRulePrivacyValueAllowUsersUsers extends TlAnchorModel
{
    protected $table = 'tl_privacy_rule_privacy_value_allow_users__users';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
