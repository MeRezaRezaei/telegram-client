<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for sponsoredMessageReportOption of SponsoredMessageReportOption (crc32 430d3150). */
final class TlSponsoredMessageReportOptionSponsoredMessageReportOption extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_sponsored_message_report_option_sponsored__39be773435f3';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
        'option' => 'string',
    ];
}
