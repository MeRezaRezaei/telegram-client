<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateMessagePoll of Update.
 */
final class UpdateMessagePollData extends TlUpdateAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public ?int $msgId,
    public ?int $topMsgId,
    public int $pollId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPollAbstractData $poll,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPollResultsAbstractData $results,
    ) {
    }
}
