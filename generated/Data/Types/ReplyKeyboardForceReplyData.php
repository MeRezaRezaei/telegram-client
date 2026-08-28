<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for replyKeyboardForceReply of ReplyMarkup.
 */
final class ReplyKeyboardForceReplyData extends TlReplyMarkupAbstractData
{
    public function __construct(
    public int $flags,
    public bool $singleUse,
    public bool $selective,
    public string $placeholder,
    ) {
    }
}
