<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatBannedRights of ChatBannedRights.
 */
final class ChatBannedRightsData extends TlChatBannedRightsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $viewMessages,
    public bool $sendMessages,
    public bool $sendMedia,
    public bool $sendStickers,
    public bool $sendGifs,
    public bool $sendGames,
    public bool $sendInline,
    public bool $embedLinks,
    public bool $sendPolls,
    public bool $changeInfo,
    public bool $inviteUsers,
    public bool $pinMessages,
    public bool $manageTopics,
    public bool $sendPhotos,
    public bool $sendVideos,
    public bool $sendRoundvideos,
    public bool $sendAudios,
    public bool $sendVoices,
    public bool $sendDocs,
    public bool $sendPlain,
    public bool $editRank,
    public bool $sendReactions,
    public int $untilDate,
    ) {
    }
}
