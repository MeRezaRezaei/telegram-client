<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputThemeSettings of InputThemeSettings.
 */
final class InputThemeSettingsData extends TlInputThemeSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $messageColorsAnimated,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBaseThemeAbstractData $baseTheme,
    public int $accentColor,
    public int $outboxAccentColor,
    public ?array $messageColors,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputWallPaperAbstractData $wallpaper,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWallPaperSettingsAbstractData $wallpaperSettings,
    ) {
    }
}
