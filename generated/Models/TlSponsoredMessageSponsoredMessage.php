<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlSponsoredMessageSponsoredMessageEntities;

/** Constructor model for sponsoredMessage of SponsoredMessage (crc32 7dbf8673). */
final class TlSponsoredMessageSponsoredMessage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_sponsored_message_sponsored_message';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'recommended' => 'bool',
        'can_report' => 'bool',
        'random_id' => 'string',
        'url' => 'string',
        'title' => 'string',
        'message' => 'string',
        'photo' => 'string',
        'media' => 'string',
        'color' => 'string',
        'button_text' => 'string',
        'sponsor_info' => 'string',
        'additional_info' => 'string',
        'min_display_duration' => 'int',
        'max_display_duration' => 'int',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlSponsoredMessageSponsoredMessageEntities::class);
    }
}
