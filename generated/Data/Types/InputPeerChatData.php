<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPeerChat of InputPeer.
 */
final class InputPeerChatData extends TlInputPeerAbstractData
{
    public function __construct(
    public int $chatId,
    ) {
    }
}
