<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputMediaWebPage of InputMedia.
 */
final class InputMediaWebPageData extends TlInputMediaAbstractData
{
    public function __construct(
    public int $flags,
    public bool $forceLargeMedia,
    public bool $forceSmallMedia,
    public bool $optional,
    public string $url,
    ) {
    }
}
