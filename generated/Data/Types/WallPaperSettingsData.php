<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for wallPaperSettings of WallPaperSettings.
 */
final class WallPaperSettingsData extends TlWallPaperSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $blur,
    public bool $motion,
    public int $backgroundColor,
    public int $secondBackgroundColor,
    public int $thirdBackgroundColor,
    public int $fourthBackgroundColor,
    public int $intensity,
    public int $rotation,
    public string $emoticon,
    ) {
    }
}
