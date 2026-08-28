<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for replyKeyboardHide of ReplyMarkup.
 */
final class ReplyKeyboardHideData extends TlReplyMarkupAbstractData
{
    public function __construct(
    public int $flags,
    public bool $selective,
    ) {
    }
}
