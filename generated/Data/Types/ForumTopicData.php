<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for forumTopic of ForumTopic.
 */
final class ForumTopicData extends TlForumTopicAbstractData
{
    public function __construct(
    public int $flags,
    public bool $my,
    public bool $closed,
    public bool $pinned,
    public bool $short,
    public bool $hidden,
    public bool $titleMissing,
    public int $id,
    public int $date,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public string $title,
    public int $iconColor,
    public int $iconEmojiId,
    public int $topMessage,
    public int $readInboxMaxId,
    public int $readOutboxMaxId,
    public int $unreadCount,
    public int $unreadMentionsCount,
    public int $unreadReactionsCount,
    public int $unreadPollVotesCount,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $fromId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerNotifySettingsAbstractData $notifySettings,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDraftMessageAbstractData $draft,
    ) {
    }
}
