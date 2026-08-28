<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use MeRezaRezaei\TelegramClient\Schema\Generated\Models\TlLangPackDifferenceLangPackDifferenceStrings;

/** Constructor model for langPackDifference of LangPackDifference (crc32 f385c1f6). */
final class TlLangPackDifferenceLangPackDifference extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_lang_pack_difference_lang_pack_difference';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'lang_code' => 'string',
        'from_version' => 'int',
        'version' => 'int',
    ];

    public function strings(): HasMany
    {
        return $this->tlChild(TlLangPackDifferenceLangPackDifferenceStrings::class);
    }
}
