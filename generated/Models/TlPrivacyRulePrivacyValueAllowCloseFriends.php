<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for privacyValueAllowCloseFriends of PrivacyRule (crc32 f7e8d89b). */
final class TlPrivacyRulePrivacyValueAllowCloseFriends extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_privacy_rule_privacy_value_allow_close_friends';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
