<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messagePeerVote of MessagePeerVote.
 *
 * bytes params carried as base64 strings: option
 */
final class MessagePeerVoteData extends TlMessagePeerVoteAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public string $option,
    public int $date,
    ) {
    }
}
