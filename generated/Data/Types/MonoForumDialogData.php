<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for monoForumDialog of SavedDialog.
 */
final class MonoForumDialogData extends TlSavedDialogAbstractData
{
    public function __construct(
    public int $flags,
    public bool $unreadMark,
    public bool $nopaidMessagesException,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $topMessage,
    public int $readInboxMaxId,
    public int $readOutboxMaxId,
    public int $unreadCount,
    public int $unreadReactionsCount,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDraftMessageAbstractData $draft,
    ) {
    }
}
