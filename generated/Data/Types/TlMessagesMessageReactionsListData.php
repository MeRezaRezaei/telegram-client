<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.messageReactionsList of messages.MessageReactionsList.
 */
final class TlMessagesMessageReactionsListData extends TlMessagesMessageReactionsListAbstractData
{
    public function __construct(
    public int $flags,
    public int $count,
    public array $reactions,
    public array $chats,
    public array $users,
    public string $nextOffset,
    ) {
    }
}
