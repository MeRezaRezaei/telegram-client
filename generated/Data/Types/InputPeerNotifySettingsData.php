<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for inputPeerNotifySettings of InputPeerNotifySettings.
 */
final class InputPeerNotifySettingsData extends TlInputPeerNotifySettingsAbstractData
{
    public function __construct(
    public int $flags,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $showPreviews,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $silent,
    public int $muteUntil,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $sound,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $storiesMuted,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlBoolAbstractData $storiesHideSender,
    public ?\MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotificationSoundAbstractData $storiesSound,
    ) {
    }
}
