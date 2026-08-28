<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionChatEditTitle of MessageAction.
 */
final class MessageActionChatEditTitleData extends TlMessageActionAbstractData
{
    public function __construct(
    public string $title,
    ) {
    }
}
