<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for paidReactionPrivacyAnonymous of PaidReactionPrivacy (crc32 1f0c1ad9). */
final class TlPaidReactionPrivacyPaidReactionPrivacyAnonymous extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_paid_reaction_privacy_paid_reaction_privacy_anonymous';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
