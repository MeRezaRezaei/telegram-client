<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inlineBotWebView of InlineBotWebView.
 */
final class InlineBotWebViewData extends TlInlineBotWebViewAbstractData
{
    public function __construct(
    public string $text,
    public string $url,
    ) {
    }
}
