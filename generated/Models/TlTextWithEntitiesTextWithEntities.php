<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlTextWithEntitiesTextWithEntitiesEntities;

/** Constructor model for textWithEntities of TextWithEntities (crc32 751f3146). */
final class TlTextWithEntitiesTextWithEntities extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_text_with_entities_text_with_entities';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'text' => 'string',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlTextWithEntitiesTextWithEntitiesEntities::class);
    }
}
