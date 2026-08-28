<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messagePeerReaction of MessagePeerReaction.
 */
final class MessagePeerReactionData extends TlMessagePeerReactionAbstractData
{
    public function __construct(
    public int $flags,
    public bool $big,
    public bool $unread,
    public bool $my,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peerId,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlReactionAbstractData $reaction,
    ) {
    }
}
