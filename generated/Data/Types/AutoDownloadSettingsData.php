<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for autoDownloadSettings of AutoDownloadSettings.
 */
final class AutoDownloadSettingsData extends TlAutoDownloadSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $disabled,
    public bool $videoPreloadLarge,
    public bool $audioPreloadNext,
    public bool $phonecallsLessData,
    public bool $storiesPreload,
    public int $photoSizeMax,
    public int $videoSizeMax,
    public int $fileSizeMax,
    public int $videoUploadMaxbitrate,
    public int $smallQueueActiveOperationsMax,
    public int $largeQueueActiveOperationsMax,
    ) {
    }
}
