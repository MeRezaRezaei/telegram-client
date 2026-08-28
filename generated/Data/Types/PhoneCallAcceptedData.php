<?php

// GENERATED — do not edit; run artisan telegram-client:regenerate

declare(strict_types=1);

namespace MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types;

use Spatie\LaravelData\Data;

/** DTO for phoneCallAccepted of PhoneCall.
 *
 * bytes params carried as base64 strings: g_b
 */
final class PhoneCallAcceptedData extends TlPhoneCallAbstractData
{
    public function __construct(
    public int $flags,
    public bool $video,
    public int $id,
    public int $accessHash,
    public int $date,
    public int $adminId,
    public int $participantId,
    public string $gB,
    public \MeRezaRezaei\TelegramClient\Schema\Generated\Data\Types\TlPhoneCallProtocolAbstractData $protocol,
    ) {
    }
}
