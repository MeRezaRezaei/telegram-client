<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for dialogFolder of Dialog.
 */
final class DialogFolderData extends TlDialogAbstractData
{
    public function __construct(
    public int $flags,
    public bool $pinned,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlFolderAbstractData $folder,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    public int $topMessage,
    public int $unreadMutedPeersCount,
    public int $unreadUnmutedPeersCount,
    public int $unreadMutedMessagesCount,
    public int $unreadUnmutedMessagesCount,
    ) {
    }
}
