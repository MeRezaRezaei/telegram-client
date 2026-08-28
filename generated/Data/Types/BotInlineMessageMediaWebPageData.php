<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botInlineMessageMediaWebPage of BotInlineMessage.
 */
final class BotInlineMessageMediaWebPageData extends TlBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $invertMedia,
    public bool $forceLargeMedia,
    public bool $forceSmallMedia,
    public bool $manual,
    public bool $safe,
    public string $message,
    public ?array $entities,
    public string $url,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    ) {
    }
}
