<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMediaPhotoExternal of InputMedia.
 */
final class InputMediaPhotoExternalData extends TlInputMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $spoiler,
    public string $url,
    public int $ttlSeconds,
    ) {
    }
}
