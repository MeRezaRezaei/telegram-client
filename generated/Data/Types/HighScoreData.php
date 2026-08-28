<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for highScore of HighScore.
 */
final class HighScoreData extends TlHighScoreAbstractData
{
    public function __construct(
    public int $pos,
    public int $userId,
    public int $score,
    ) {
    }
}
