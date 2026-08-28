<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for botInlineMessageRichMessage of BotInlineMessage.
 */
final class BotInlineMessageRichMessageData extends TlBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlRichMessageAbstractData $richMessage,
    ) {
    }
}
