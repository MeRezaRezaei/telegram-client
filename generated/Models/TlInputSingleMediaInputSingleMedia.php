<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlInputSingleMediaInputSingleMediaEntities;

/** Constructor model for inputSingleMedia of InputSingleMedia (crc32 1cc6e91f). */
final class TlInputSingleMediaInputSingleMedia extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_single_media_input_single_media';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'media' => 'string',
        'random_id' => 'int',
        'message' => 'string',
    ];

    public function entities(): HasMany
    {
        return $this->tlChild(TlInputSingleMediaInputSingleMediaEntities::class);
    }
}
