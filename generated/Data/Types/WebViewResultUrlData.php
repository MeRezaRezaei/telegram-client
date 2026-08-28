<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for webViewResultUrl of WebViewResult.
 */
final class WebViewResultUrlData extends TlWebViewResultAbstractData
{
    public function __construct(
    public int $flags,
    public bool $fullsize,
    public bool $fullscreen,
    public bool $sameOrigin,
    public int $queryId,
    public string $url,
    ) {
    }
}
