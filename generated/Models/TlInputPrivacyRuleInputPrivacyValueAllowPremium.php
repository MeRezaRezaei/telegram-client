<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPrivacyValueAllowPremium of InputPrivacyRule (crc32 77cdc9f1). */
final class TlInputPrivacyRuleInputPrivacyValueAllowPremium extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_privacy_rule_input_privacy_value_allow_premium';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
