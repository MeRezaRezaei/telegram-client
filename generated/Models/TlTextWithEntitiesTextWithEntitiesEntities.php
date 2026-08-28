<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param entities (table tl_text_with_entities_text_with_entities__entities). */
final class TlTextWithEntitiesTextWithEntitiesEntities extends TlAnchorModel
{
    protected $table = 'tl_text_with_entities_text_with_entities__entities';

    public $timestamps = false; // child tables carry no timestamps columns

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
    ];
}
