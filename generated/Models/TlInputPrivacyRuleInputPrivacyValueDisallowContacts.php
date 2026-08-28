<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputPrivacyValueDisallowContacts of InputPrivacyRule (crc32 0ba52007). */
final class TlInputPrivacyRuleInputPrivacyValueDisallowContacts extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_privacy_rule_input_privacy_value_dis_8a366d0a4f14';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
