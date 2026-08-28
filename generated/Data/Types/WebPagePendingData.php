<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for webPagePending of WebPage.
 */
final class WebPagePendingData extends TlWebPageAbstractData
{
    public function __construct(
    public int $flags,
    public int $id,
    public ?string $url,
    public int $date,
    ) {
    }
}
