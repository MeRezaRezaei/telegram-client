<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\HasTlChildren;
use MeRezaRezaei\TelegramClient\Schema\Eloquent\TlInstanceModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/** Constructor model for highScore of HighScore (crc32 73a379eb). */
final class TlHighScoreHighScore extends TlInstanceModel
{
    use HasFactory, HasTlChildren;

    protected $table = 'tl_high_score_high_score';

    protected $guarded = [];

    /** @var array<string, string> */
    protected $casts = [
        'pos' => 'int',
        'user_id' => 'int',
        'score' => 'int',
    ];
}
