<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for globalPrivacySettings of GlobalPrivacySettings.
 */
final class GlobalPrivacySettingsData extends TlGlobalPrivacySettingsAbstractData
{
    public function __construct(
    public int $flags,
    public bool $archiveAndMuteNewNoncontactPeers,
    public bool $keepArchivedUnmuted,
    public bool $keepArchivedFolders,
    public bool $hideReadMarks,
    public bool $newNoncontactPeersRequirePremium,
    public bool $displayGiftsButton,
    public int $noncontactPeersPaidStars,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlDisallowedGiftsSettingsAbstractData $disallowedGifts,
    ) {
    }
}
