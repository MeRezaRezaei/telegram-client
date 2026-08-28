<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlAnchorModel;

/** Vector child rows for param correct_answers (table tl_input_media_input_media_poll__correct_answers). */
final class TlInputMediaInputMediaPollCorrect_answers extends TlAnchorModel
{
    protected $table = 'tl_input_media_input_media_poll__correct_answers';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'value' => 'int',
    ];
}
