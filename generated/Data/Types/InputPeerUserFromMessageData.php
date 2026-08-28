<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPeerUserFromMessage of InputPeer.
 */
final class InputPeerUserFromMessageData extends TlInputPeerAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputPeerAbstractData $peer,
    public int $msgId,
    public int $userId,
    ) {
    }
}
