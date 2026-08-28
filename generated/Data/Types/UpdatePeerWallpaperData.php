<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updatePeerWallpaper of Update.
 */
final class UpdatePeerWallpaperData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public bool $wallpaperOverridden,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWallPaperAbstractData $wallpaper,
    ) {
    }
}
