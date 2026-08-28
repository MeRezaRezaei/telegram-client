<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for chatFull of ChatFull.
 */
final class ChatFullData extends TlChatFullAbstractData
{
    public function __construct(
    public int $flags,
    public bool $canSetUsername,
    public bool $hasScheduled,
    public bool $translationsDisabled,
    public int $id,
    public string $about,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatParticipantsAbstractData $participants,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhotoAbstractData $chatPhoto,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerNotifySettingsAbstractData $notifySettings,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlExportedChatInviteAbstractData $exportedInvite,
    public ?array $botInfo,
    public int $pinnedMsgId,
    public int $folderId,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlInputGroupCallAbstractData $call,
    public int $ttlPeriod,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $groupcallDefaultJoinAs,
    public string $themeEmoticon,
    public int $requestsPending,
    public ?array $recentRequesters,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatReactionsAbstractData $availableReactions,
    public int $reactionsLimit,
    ) {
    }
}
