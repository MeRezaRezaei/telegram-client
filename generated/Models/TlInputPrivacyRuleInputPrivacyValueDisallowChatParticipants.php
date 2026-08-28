<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputPrivacyRuleInputPrivacyValueDis92dd14476e43Chats;

/** Constructor model for inputPrivacyValueDisallowChatParticipants of InputPrivacyRule (crc32 e94f0f86). */
final class TlInputPrivacyRuleInputPrivacyValueDisallowChatParticipants extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_privacy_rule_input_privacy_value_dis_92dd14476e43';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];

    public function chats(): HasMany
    {
        return $this->tlChild(TlInputPrivacyRuleInputPrivacyValueDis92dd14476e43Chats::class);
    }
}
