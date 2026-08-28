<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messagePeerVoteMultiple of MessagePeerVote.
 */
final class MessagePeerVoteMultipleData extends TlMessagePeerVoteAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public array $options,
    public int $date,
    ) {
    }
}
