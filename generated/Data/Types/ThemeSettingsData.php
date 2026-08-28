<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for themeSettings of ThemeSettings.
 */
final class ThemeSettingsData extends TlThemeSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $messageColorsAnimated,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBaseThemeAbstractData $baseTheme,
    public int $accentColor,
    public int $outboxAccentColor,
    public ?array $messageColors,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWallPaperAbstractData $wallpaper,
    ) {
    }
}
