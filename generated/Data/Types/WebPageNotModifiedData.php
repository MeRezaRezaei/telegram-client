<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for webPageNotModified of WebPage.
 */
final class WebPageNotModifiedData extends TlWebPageAbstractData
{
    public function __construct(
    public int $flags,
    public int $cachedPageViews,
    ) {
    }
}
