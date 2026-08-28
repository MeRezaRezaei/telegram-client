<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotInlineMessageMediaWebPage of InputBotInlineMessage.
 */
final class InputBotInlineMessageMediaWebPageData extends TlInputBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $invertMedia,
    public bool $forceLargeMedia,
    public bool $forceSmallMedia,
    public bool $optional,
    public string $message,
    public ?array $entities,
    public string $url,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    ) {
    }
}
