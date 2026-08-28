<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsSuggestedStarRefBotsSuggested2b419606faf4Suggested_bots;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlPaymentsSuggestedStarRefBotsSuggested2b419606faf4Users;

/** Constructor model for payments.suggestedStarRefBots of payments.SuggestedStarRefBots (crc32 b4d5d859). */
final class TlPaymentsSuggestedStarRefBotsSuggestedStarRefBots extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_payments_suggested_star_ref_bots_suggested_2b419606faf4';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'count' => 'int',
        'next_offset' => 'string',
    ];

    public function suggestedBots(): HasMany
    {
        return $this->tlChild(TlPaymentsSuggestedStarRefBotsSuggested2b419606faf4Suggested_bots::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlPaymentsSuggestedStarRefBotsSuggested2b419606faf4Users::class);
    }
}
