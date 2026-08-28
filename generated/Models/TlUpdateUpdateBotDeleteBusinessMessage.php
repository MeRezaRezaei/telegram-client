<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlUpdateUpdateBotDeleteBusinessMessageMessages;

/** Constructor model for updateBotDeleteBusinessMessage of Update (crc32 a02a982e). */
final class TlUpdateUpdateBotDeleteBusinessMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_update_update_bot_delete_business_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'connection_id' => 'string',
        'peer' => 'string',
        'qts' => 'int',
    ];

    public function messages(): HasMany
    {
        return $this->tlChild(TlUpdateUpdateBotDeleteBusinessMessageMessages::class);
    }
}
