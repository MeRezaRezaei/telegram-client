<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for updateNotifySettings of Update.
 */
final class UpdateNotifySettingsData extends TlUpdateAbstractData
{
    public function __construct(
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlNotifyPeerAbstractData $peer,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerNotifySettingsAbstractData $notifySettings,
    ) {
    }
}
