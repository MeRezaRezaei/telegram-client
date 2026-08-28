<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPremiumPromoPremiumPromoStatus_entities;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPremiumPromoPremiumPromoVideo_sections;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPremiumPromoPremiumPromoVideos;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPremiumPromoPremiumPromoPeriod_options;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlHelpPremiumPromoPremiumPromoUsers;

/** Constructor model for help.premiumPromo of help.PremiumPromo (crc32 5334759c). */
final class TlHelpPremiumPromoPremiumPromo extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_help_premium_promo_premium_promo';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'status_text' => 'string',
    ];

    public function statusEntities(): HasMany
    {
        return $this->tlChild(TlHelpPremiumPromoPremiumPromoStatus_entities::class);
    }
    public function videoSections(): HasMany
    {
        return $this->tlChild(TlHelpPremiumPromoPremiumPromoVideo_sections::class);
    }
    public function videos(): HasMany
    {
        return $this->tlChild(TlHelpPremiumPromoPremiumPromoVideos::class);
    }
    public function periodOptions(): HasMany
    {
        return $this->tlChild(TlHelpPremiumPromoPremiumPromoPeriod_options::class);
    }
    public function users(): HasMany
    {
        return $this->tlChild(TlHelpPremiumPromoPremiumPromoUsers::class);
    }
}
