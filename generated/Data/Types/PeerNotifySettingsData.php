<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for peerNotifySettings of PeerNotifySettings.
 */
final class PeerNotifySettingsData extends TlPeerNotifySettingsAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $showPreviews,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $silent,
    public int $muteUntil,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $iosSound,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $androidSound,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $otherSound,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $storiesMuted,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $storiesHideSender,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $storiesIosSound,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $storiesAndroidSound,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $storiesOtherSound,
    ) {
    }
}
