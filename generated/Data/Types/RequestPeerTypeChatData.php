<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for requestPeerTypeChat of RequestPeerType.
 */
final class RequestPeerTypeChatData extends TlRequestPeerTypeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $creator,
    public bool $botParticipant,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $hasUsername,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $forum,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $userAdminRights,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $botAdminRights,
    ) {
    }
}
