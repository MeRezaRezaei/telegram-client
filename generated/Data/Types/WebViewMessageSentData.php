<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for webViewMessageSent of WebViewMessageSent.
 */
final class WebViewMessageSentData extends TlWebViewMessageSentAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputBotInlineMessageIDAbstractData $msgId,
    ) {
    }
}
