<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for wallPaperNoFile of WallPaper.
 */
final class WallPaperNoFileData extends TlWallPaperAbstractData
{
    public function __construct(
    public int $id,
    public int $flags,
    public bool $default,
    public bool $dark,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlWallPaperSettingsAbstractData $settings,
    ) {
    }
}
