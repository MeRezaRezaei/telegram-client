<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messageActionPaidMessagesPrice of MessageAction.
 */
final class MessageActionPaidMessagesPriceData extends TlMessageActionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $broadcastMessagesAllowed,
    public int $stars,
    ) {
    }
}
