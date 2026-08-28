<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botInlineMessageMediaAuto of BotInlineMessage.
 */
final class BotInlineMessageMediaAutoData extends TlBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public bool $invertMedia,
    public string $message,
    public ?array $entities,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    ) {
    }
}
