<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputBotInlineMessageMediaContact of InputBotInlineMessage.
 */
final class InputBotInlineMessageMediaContactData extends TlInputBotInlineMessageAbstractData
{
    public function __construct(
    public int $flags,
    public string $phoneNumber,
    public string $firstName,
    public string $lastName,
    public string $vcard,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReplyMarkupAbstractData $replyMarkup,
    ) {
    }
}
