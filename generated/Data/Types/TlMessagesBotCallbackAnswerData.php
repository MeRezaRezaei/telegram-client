<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.botCallbackAnswer of messages.BotCallbackAnswer.
 */
final class TlMessagesBotCallbackAnswerData extends TlMessagesBotCallbackAnswerAbstractData
{
    public function __construct(
    public int $flags,
    public bool $alert,
    public bool $hasUrl,
    public bool $nativeUi,
    public string $message,
    public string $url,
    public int $cacheTime,
    ) {
    }
}
