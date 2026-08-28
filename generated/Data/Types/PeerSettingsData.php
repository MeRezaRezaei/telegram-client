<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for peerSettings of PeerSettings.
 */
final class PeerSettingsData extends TlPeerSettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $reportSpam,
    public bool $addContact,
    public bool $blockContact,
    public bool $shareContact,
    public bool $needContactsException,
    public bool $reportGeo,
    public bool $autoarchived,
    public bool $inviteMembers,
    public bool $requestChatBroadcast,
    public bool $businessBotPaused,
    public bool $businessBotCanReply,
    public int $geoDistance,
    public string $requestChatTitle,
    public int $requestChatDate,
    public int $businessBotId,
    public string $businessBotManageUrl,
    public int $chargePaidMessageStars,
    public string $registrationMonth,
    public string $phoneCountry,
    public int $nameChangeDate,
    public int $photoChangeDate,
    ) {
    }
}
