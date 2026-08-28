<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.messagesSlice of messages.Messages.
 */
final class TlMessagesMessagesSliceData extends TlMessagesMessagesAbstractData
{
    public function __construct(
    public int $flags,
    public bool $inexact,
    public int $count,
    public int $nextRate,
    public int $offsetIdOffset,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlSearchPostsFloodAbstractData $searchFlood,
    public array $messages,
    public array $topics,
    public array $chats,
    public array $users,
    ) {
    }
}
