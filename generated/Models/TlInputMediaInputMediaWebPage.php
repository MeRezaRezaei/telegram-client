<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for inputMediaWebPage of InputMedia (crc32 c21b8849). */
final class TlInputMediaInputMediaWebPage extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_input_media_input_media_web_page';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'flags' => 'int',
        'force_large_media' => 'bool',
        'force_small_media' => 'bool',
        'optional' => 'bool',
        'url' => 'string',
    ];
}
