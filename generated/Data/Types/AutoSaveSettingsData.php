<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for autoSaveSettings of AutoSaveSettings.
 */
final class AutoSaveSettingsData extends TlAutoSaveSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $photos,
    public bool $videos,
    public int $videoMaxSize,
    ) {
    }
}
