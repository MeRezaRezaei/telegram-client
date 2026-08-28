<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for messages.forumTopics of messages.ForumTopics.
 */
final class TlMessagesForumTopicsData extends TlMessagesForumTopicsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $orderByCreateDate,
    public int $count,
    public array $topics,
    public array $messages,
    public array $chats,
    public array $users,
    public int $pts,
    ) {
    }
}
