<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param rules (table tl_account_privacy_rules_privacy_rules__rules). */
final class TlAccountPrivacyRulesPrivacyRulesRules extends TlAnchorModel
{
    protected $table = 'tl_account_privacy_rules_privacy_rules__rules';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
