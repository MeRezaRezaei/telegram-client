<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for replyKeyboardMarkup of ReplyMarkup.
 */
final class ReplyKeyboardMarkupData extends TlReplyMarkupAbstractData
{
    public function __construct(
    public int $flags,
    public bool $resize,
    public bool $singleUse,
    public bool $selective,
    public bool $persistent,
    public array $rows,
    public string $placeholder,
    ) {
    }
}
