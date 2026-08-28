<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsCheckedGiftCodeCheckedGiftCodeChats;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsCheckedGiftCodeCheckedGiftCodeUsers;

/** Constructor model for payments.checkedGiftCode of payments.CheckedGiftCode (crc32 eb983f8f). */
final class TlPaymentsCheckedGiftCodeCheckedGiftCode extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_checked_gift_code_checked_gift_code';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'via_giveaway' => 'bool',
        'from_id' => 'string',
        'giveaway_msg_id' => 'int',
        'to_id' => 'int',
        'date' => 'int',
        'days' => 'int',
        'used_date' => 'int',
    ];

    public function chats(): HasMany
    {
        return $this->tlChild(TlPaymentsCheckedGiftCodeCheckedGiftCodeChats::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsCheckedGiftCodeCheckedGiftCodeUsers::class);
    }
}
