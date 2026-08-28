<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for sendAsPeer of SendAsPeer.
 */
final class SendAsPeerData extends TlSendAsPeerAbstractData
{
    public function __construct(
    public int $flags,
    public bool $premiumRequired,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPeerAbstractData $peer,
    ) {
    }
}
