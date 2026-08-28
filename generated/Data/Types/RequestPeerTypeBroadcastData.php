<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for requestPeerTypeBroadcast of RequestPeerType.
 */
final class RequestPeerTypeBroadcastData extends TlRequestPeerTypeAbstractData
{
    public function __construct(
    public int $flags,
    public bool $creator,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $hasUsername,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $userAdminRights,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlChatAdminRightsAbstractData $botAdminRights,
    ) {
    }
}
