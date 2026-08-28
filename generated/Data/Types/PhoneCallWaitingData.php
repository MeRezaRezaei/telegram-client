<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneCallWaiting of PhoneCall.
 */
final class PhoneCallWaitingData extends TlPhoneCallAbstractData
{
    public function __construct(
    public int $flags,
    public bool $video,
    public int $id,
    public int $accessHash,
    public int $date,
    public int $adminId,
    public int $participantId,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhoneCallProtocolAbstractData $protocol,
    public int $receiveDate,
    ) {
    }
}
